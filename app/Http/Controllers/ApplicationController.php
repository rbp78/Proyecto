<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
    	return view ('application');
    }

    public function __construct()
    {
    	$this->middleware('auth');
    }
}
