<?php

namespace App\Http\Controllers;

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
        }elseif ($role=="user"){
            return view('welcome',['data'=>$data]);
        }
    }
}
