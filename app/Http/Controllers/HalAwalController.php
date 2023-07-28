<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalAwalController extends Controller
{
    function index()
    {
    $pageTitle = 'HalamanAwal';
    return view('HalamanAwal', ['pageTitle' => $pageTitle,]);
    }
}
