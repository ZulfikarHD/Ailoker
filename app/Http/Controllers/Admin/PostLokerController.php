<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostingLokerRequest;
use App\Models\Contract;
use App\Models\Company;
use App\Models\CompanyContact;
use App\Models\CompanyEmail;
use App\Models\CompanySocialMedia;
use App\Models\Industry;
use App\Models\Jobs;
use App\Models\JobSkills;
use App\Models\JobEducation;
use App\Models\JobApplyMethod;
use App\Models\JobDetails;

class PostLokerController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        $industry  = Industry::all();

        return view('admin.form.posting-loker', [
            'contracts' => $contracts,
            'industry'  => $industry,
        ]);
    }

    public function store(Request $request)
    {
        $company = Company::updateOrCreate(
            [
                'name' => $request->namaPT,
                'address'       => $request->alamatPT,
                'website'       => $request->webPT,
                'industry_id'   => $request->industriPT,
            ],
            [
                'about_us'      => $request->profilePT ?? "-",
                'logo'          => $request->logoPT ?? "default.png",
                'company_size' => $request->ukuranPT ?? "-",
            ]
        );

        $companyContact = CompanyContact::updateOrCreate(
            [
                'company_id'   => $company->id,
                'phone_number' => $request->kontakPT,
            ],
            [
                'status'       => 0,
            ]
        );

        $companyEmail = CompanyEmail::updateOrCreate(
            [
                'company_id'    => $company->id,
                'email'         => $request->emailPT,
            ],
            [
                'status'       => 0,
            ]
        );

        // $companySocialMedia  = CompanySocialMedia::updateOrCreate(
        //     [
        //         'company_id'     => $company->id,
        //         'social_media_id'=> $request->sosialMedia,
        //     ],
        //     [
        //         'link'  =>  $request->linkSosial,
        //     ]
        // );

        $jobs = Jobs::create([
            'company_id'   => $company->id,
            'title'        => $request->judulLoker,
            'contract_id'  => $request->jenisKontrak,
            'posted_by'    => 1,
            'is_verified'  => 0,
            'expired_date' => $request->batasAkhir,
        ]);
        $this->jobDescription($request, $jobs);
        $this->jobSkills($request, $jobs);
        $this->jobEducation($request, $jobs);
        $this->howToApply($request, $jobs);

        return redirect()->back()->with('success', 'Posting berhasil!');
    }

    private function jobDescription($request, $jobs)
    {
        $jobDescription = JobDetails::create([
            'jobs_id'       => $jobs->id,
            'description'   => $request->deskripsiLoker ?? "-",
            'address'       => $request->alamatLoker ?? "-",
        ]);
    }

    private function jobSkills($request, $jobs)
    {
        $jobSkills = JobSkills::create([
            'jobs_id' => $jobs->id,
            'skills_id' => $request->skills,
        ]);
    }

    private function jobEducation($request, $jobs)
    {
        $jobEducation = JobEducation::create([
            'jobs_id' => $jobs->id,
            'education' => $request->pendidikan,
        ]);
    }

    private function howToApply($request, $jobs)
    {
        $jobApplyWalkin = JobApplyMethod::create([
            'jobs_id' => $jobs->id,
            'method' => "Walkin Interview",
            'how_to_apply' => $request->regWalkin,
        ]);

        $jobApplyPOS = JobApplyMethod::create([
            'jobs_id' => $jobs->id,
            'method' => "POS",
            'how_to_apply' => $request->regPos,
        ]);

        $jobApplyEmail = JobApplyMethod::create([
            'jobs_id' => $jobs->id,
            'method' => "Email",
            'how_to_apply' => $request->regEmail,
        ]);

        $jobApplyLinkedin = JobApplyMethod::create([
            'jobs_id' => $jobs->id,
            'method' => "Linkedin",
            'how_to_apply' => $request->regLinkedin,
        ]);

        $jobApplyInstagram = JobApplyMethod::create([
            'jobs_id' => $jobs->id,
            'method' => "Instagram",
            'how_to_apply' => $request->regInstagram,
        ]);

        $jobApplyJobstreet = JobApplyMethod::create([
            'jobs_id' => $jobs->id,
            'method' => "Jobstreet",
            'how_to_apply' => $request->regJobstreet,
        ]);
    }
}
