<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
    	return view('form');
    }

    public function welcome(Request $request) {
    	$namadepan = $request["nama_depan"];
    	$namabelakang = $request["nama_belakang"];
    	$data = array('depan' => $namadepan, 'belakang' => $namabelakang);
    	return view('welcome', $data);
    }
}
