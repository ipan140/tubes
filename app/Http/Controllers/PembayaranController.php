<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
        public function index()
    {
        $pageTitle = 'Pembayaran';
        return view('pembayaran', ['pageTitle' => $pageTitle]);
    }

}
