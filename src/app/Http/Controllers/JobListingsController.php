<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobListingsController extends Controller
{
    public function index(){
        return view('job-listings');
    }
}
