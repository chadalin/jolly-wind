<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers;
use Illuminate\Http\Request;

class AdminFrontController extends Controller
{
     public function index()
    {
        return view('admin.daschboard');
    }
}
