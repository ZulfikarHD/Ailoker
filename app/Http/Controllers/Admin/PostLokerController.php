<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostingLokerRequest;
use App\Models\Contract;
use App\Models\Company;

class PostLokerController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();

        return view('admin.form.posting-loker', [
            'contracts' => $contracts,
        ]);
    }

    public function store(StorePostingLokerRequest $request)
    {
        Company::updateOrCreate(
            [
                'name' => $request->namaPT,
                'address'       => $request->alamatPT,
                'website'       => $request->webPT,
                'industry_id'   => $request->industriPT,
            ],
            [
                'about_us'   => $request->profilePT,
                'logo'       => $request->logoPT,
            ]
        );
    }
}
