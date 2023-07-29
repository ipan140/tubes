<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index ()
    {
        $id = Auth::user()->id;
        $data = DB::table('users')
                ->where('id','=', $id)
                ->first();
        $role = $data->role;
        if ($role=="admin"){
            return view('dashboard.index',['data'=>$data]);
        }elseif ($role=="User"){
            $produk = Product::all();
            return view('HalamanAwal',['data'=>$data, 'produk'=>$produk]);
        }
    }

    function show ($id)
    {
        $produk = Product::findOrfail($id);
        $pageTitle = 'HalamanProduk';
        return view('HalamanProduk', ['pageTitle' => $pageTitle,'produk' => $produk]);
    }
}
