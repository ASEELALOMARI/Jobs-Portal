<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArHomeController extends Controller
{
    public function index(){
        return view('ar-home');
    }
}
