<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('master');
    }

    public function mobil(){
    	return view('mobil');
    }

    public function motor(){
    	return view('motor');
    }

    public function handphone(){
    	return view('handphone');
    }

    public function televisi(){
    	return view('televisi');
    }
}
