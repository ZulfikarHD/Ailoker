<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostLokerController extends Controller
{
    public function index()
    {
        return view('admin.form.posting-loker');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
