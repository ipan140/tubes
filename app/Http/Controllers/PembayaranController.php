<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PembayaranController extends Controller
{
    public function index()
    {
        $produk = $this->getProducts();
        return view('pembayaran', ['produk' => $produk]);
    }

    public function getProducts()
    {
        
        $produk = Product::all();
        return $produk;
    }

}
