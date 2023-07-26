<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalProdukController extends Controller
{
    function index()
    {
    $pageTitle = 'HalamanProduk';
    return view('HalamanProduk', ['pageTitle' => $pageTitle,]);
    }
}
