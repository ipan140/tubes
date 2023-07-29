<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Handle the incoming request.
     */
    function index()
    {
        $pageTitle = 'pembelian';

        return view('pembelian', ['pageTitle' => $pageTitle]);

    }
}
