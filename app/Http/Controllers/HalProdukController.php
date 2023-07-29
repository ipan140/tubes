<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HalProdukController extends Controller
{
    function index()
    {
    $pageTitle = 'HalamanProduk';
    $produk = Product::all();
    return view('HalamanProduk', ['pageTitle' => $pageTitle,'products' => $produk]);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Use the username if logged in, 'guest' if not
        $identifier = auth()->user()->name;

        Cart::instance($identifier)->add([
            'id' => $product->id,
            'name' => $product->product_album,
            'qty' => 1,
            'price' => $product->product_price,
            'options' => [
            'artist' => $product->product_artist,
                // Add more options as needed
            ]
        ]);

        return redirect()->back()->with('success', 'Item added to cart.');
    }
}


