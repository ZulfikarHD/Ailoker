<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyPicture extends Model
{
    use HasFactory;
    protected $table =  "company_picture";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the company that owns the CompanyPicture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
