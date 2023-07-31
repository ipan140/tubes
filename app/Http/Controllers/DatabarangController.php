<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatabarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create barang';
        return view('databarang.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump($request->product_photo_filename);die();
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'numeric' => 'Isi :attribute dengan angka'
            // 'image' => 'Isi : attribute dengan jpg, jpeg, png, bmp, gif, svg, atau webp saja'
        ];

        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_photo_filename' => 'required',
            'product_price' => 'required',

        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $image = $request->file('product_photo_filename');
        // $imageName = $image->hashName();
        // $image->move(resource_path('images'), $imageName);
        // $tambah = new Product();
        // $tambah->product_name = $request->product_name;
        // $tambah->product_price = $request->product_price;
        // $tambah->product_photo_filename = $imageName;
        // $tambah->save();
        // return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('dashboard.index')->with('success','Produk berhasil dihapus');
    }
}
