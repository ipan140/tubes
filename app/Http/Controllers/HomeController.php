<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    function index ()
    {
        $produk = Product::all();
        $id = Auth::user()->id;
        
        $data = DB::table('users')
                ->where('id','=', $id)
                ->first();
        $role = $data->role;
        if ($role=="admin"){
            $produk = Product::all();
            return view('dashboard.index',['data'=>$data, 'produk'=>$produk]);
        }elseif ($role=="User"){
            $produk = Product::all();
            return view('HalamanAwal',['data'=>$data, 'produk'=>$produk]);
        }
        return view('dashboard.index',['produk'=> $produk]);
    }

    function show ($id)
    {
        $produk = Product::findOrfail($id);
        $pageTitle = 'HalamanProduk';
        $identifier = Auth::user()->name;
        $cartContent = Cart::instance($identifier)->content();
        return view('HalamanProduk', ['pageTitle' => $pageTitle,'produk' => $produk, 'cartContent' => $cartContent,]);
        
    }
    function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);
        $identifier = Auth::user()->name;

        Cart::instance($identifier)->add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $quantity,
        ]);

        return redirect()->back()->with('success', 'Item added to cart successfully.');
    }
    
}
