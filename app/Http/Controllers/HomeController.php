<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('templates.index'); // Sesuaikan dengan path view kamu
    }
}
