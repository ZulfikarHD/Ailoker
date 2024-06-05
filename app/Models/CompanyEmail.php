<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyEmail extends Model
{
    use HasFactory;
    protected $table =  "company_email";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the company that owns the CompanyEmail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
