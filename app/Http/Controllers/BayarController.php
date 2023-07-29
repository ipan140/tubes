<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarController extends Controller
{
    function index()
    {
    $pageTitle = 'pembayaran';
    return view('Pembayaran', ['pageTitle' => $pageTitle,]);
    }
}
