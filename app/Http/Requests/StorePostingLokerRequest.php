<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostingLokerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'namaPT'         => 'required|string|max:255',
            'industriPT'     => 'required|string|max:255',
            'emailPT'        => 'required|email|max:255',
            'webPT'          => 'nullable|url|max:255',
            'alamatPT'       => 'required|string|max:1024',
            'profilePT'      => 'required|string|max:2048',
            'judulLoker'     => 'required|string|max:255',
            'deskripsiLoker' => 'required|string|max:2048',
            'jenisKelamin'   => 'required|in:1,2,3',
            'pendidikan'     => 'required|in:1,2,3,4,5,6,7,8,9',
            'jenisKontrak'   => 'required|exists:contracts,id',
            'skills'         => 'nullable|string|max:255',
            'alamatLoker'    => 'required|string|max:255',
            'batasAkhir'     => 'required|date',
            'regWalkin'      => 'nullable|string|max:255',
            'regPos'         => 'nullable|string|max:255',
            'regEmail'       => 'nullable|email|max:255',
            'regLinkedin'    => 'nullable|url|max:255',
            'regInstagram'   => 'nullable|url|max:255',
            'regJobstreet'   => 'nullable|url|max:255'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'namaPT.required'         => 'The company name is required.',
            'namaPT.string'           => 'The company name must be a string.',
            'namaPT.max'              => 'The company name may not be greater than 255 characters.',
            'emailPT.required'        => 'The email address is required.',
            'emailPT.email'           => 'The email address must be a valid email address.',
            'emailPT.max'             => 'The email address may not be greater than 255 characters.',
            'jenisKelamin.required'   => 'The gender field is required.',
            'jenisKelamin.in'         => 'The selected gender is invalid.',
            'pendidikan.required'     => 'The education level is required.',
            'pendidikan.in'           => 'The selected education level is invalid.',
            'jenisKontrak.exists'     => 'The selected contract type does not exist.',
            'batasAkhir.date'         => 'The deadline must be a valid date.',
            // Add other custom messages as needed
        ];
    }
}
