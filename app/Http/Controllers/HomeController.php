<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        
        // return view('welcome');
        return view('welcome', ['nama_depan' => $first_name,'nama_belakang' => $last_name]);
    }
}