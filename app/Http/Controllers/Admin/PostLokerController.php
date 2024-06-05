<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostingLokerRequest;
use App\Models\Contract;
use App\Models\Company;
use App\Models\Jobs;
use App\Models\JobSkills;
use App\Models\JobEducation;
use App\Models\JobApplyMethod;

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
        $company = Company::updateOrCreate(
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

        $jobs = Jobs::create([
                    'company_id'   => $company->id,
                    'title'        => $request->judulLoker,
                    'description'  => $request->deskripsiLoker,
                    'gender'       => $request->jenisKelamin,
                    'contract_id'   => $request->jenisKontrak,
                    'location'      => $request->alamatLoker,
                    'deadline'      => $request->batasAkhir,
                ]);

        $jobSkills = JobSkills::create([
            'job_id' => $jobs->id,
            'skill_id' => $request->skills,
        ]);

        $jobEducation = JobEducation::create([
            'job_id' => $jobs->id,
            'education_id' => $request->pendidikan,
        ]);

        $jobApplyMethod = JobApplyMethod::create([
            'job_id' => $jobs->id,
            'method_id' => $request->metode,
        ]);
    }
}
