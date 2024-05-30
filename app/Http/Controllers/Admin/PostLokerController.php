<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;

class PostLokerController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();

        return view('admin.form.posting-loker',[
            'contracts' => $contracts,
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
