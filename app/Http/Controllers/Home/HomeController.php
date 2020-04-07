<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index');
    }

    public function mobil(){
    	return view('home.mobil');
    }

    public function motor(){
    	return view('home.motor');
    }

    public function handphone(){
    	return view('home.handphone');
    }

    public function televisi(){
    	return view('home.televisi');
    }
}
