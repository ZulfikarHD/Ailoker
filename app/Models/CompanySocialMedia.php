<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySocialMedia extends Model
{
    use HasFactory;
    protected $table =  "company_social_media";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the company that owns the CompanySocialMedia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
