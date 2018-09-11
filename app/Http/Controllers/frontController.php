<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fungsi;

class frontController extends Controller
{
    public function index()
    {
    	if (Fungsi::pengaturan('status') == 1) {
    		$ico = \App\ICO::get();
    		return view('index', compact('ico'));
    	}else{
    		//maintenance
    		return view('maintenance');
    	}
    }
}
