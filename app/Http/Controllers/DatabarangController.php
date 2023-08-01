<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DatabarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Resi List';
        $produk = Product::all();
        return view('dashboard.index', [
            'pageTitle' => $pageTitle,
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Dashboard';
        // confirmDelete();
        $produk = Product::all();

        return view('dashboard.create', [
            'pageTitle' => $pageTitle,
            'produk' => $produk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get File

        $file = $request->file('fotoproduk');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // Store File
            $file->store('public/files');
        }

        // ELOQUENT
        $barang = new Product;
        $barang->product_name = $request->product_name;
        $barang->product_price = $request->product_price;
        $barang->product_deskripsi = $request->product_deskripsi;

        if ($file != null) {
            $barang->original_filename = $originalFilename;
            $barang->encrypted_filename = $encryptedFilename;
        }

        $barang->save();
        return redirect()->route('dashboardadmin')->with('success', 'Data successfully created.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::find($id);
        // return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $pageTitle = 'Edit Employee';

        // ELOQUENT
        $product = Product::all();
        $barang = Product::find($id);

        return view('dashboard.edit', compact('pageTitle', 'product', 'barang'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
    
            $file = $request->file('fotoproduk');
    
            if ($file != null) {
                $barang = Product::find($id);
                $encryptedFilename = 'public/files/' . $barang->encrypted_filename;
                Storage::delete($encryptedFilename);
            }
            if ($file != null) {
                $originalFilename = $file->getClientOriginalName();
                $encryptedFilename = $file->hashName();
    
                // Store File
                $file->Store('public/files');
            }
    
            // UPDATE QUERY (ELOQUENT)
            $barang = Product::find($id);
            $barang->product_name = $request->product_name;
            $barang->product_price = $request->product_price;
            $barang->product_deskripsi = $request->product_deskripsi;
    
            if ($file != null) {
                $barang->original_filename = $originalFilename;
                $barang->encrypted_filename = $encryptedFilename;
            }
    
            $barang->save();
            return redirect()->route('Databarang.index');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('home');
    }
}
