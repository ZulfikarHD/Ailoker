<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $table =  "company";

    /**
     * Get all of the companyContact for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companyContact(): HasMany
    {
        return $this->hasMany(CompanyContact::class);
    }

    /**
     * Get all of the companyEmail for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companyEmail(): HasMany
    {
        return $this->hasMany(CompanyEmail::class);
    }

    /**
     * Get all of the companyPicture for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companyPicture(): HasMany
    {
        return $this->hasMany(CompanyPicture::class);
    }

    /**
     * Get all of the companySocialMedia for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companySocialMedia(): HasMany
    {
        return $this->hasMany(CompanySocialMedia::class);
    }

}
