<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prestasi;

class IndexController extends Controller
{
    public function index()
    {
    	$list_prestasi = prestasi::all();
    	return view('index', compact('list_prestasi'));
    }
}
