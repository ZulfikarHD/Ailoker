<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListLokerController extends Controller
{
    public function index()
    {
        return view('list-loker');
    }
}
