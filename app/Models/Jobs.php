<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jobs extends Model
{
    use HasFactory;
    protected $table =  "jobs";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get all of the jobDescription for the Jobs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobDescription(): HasMany
    {
        return $this->hasMany(JobDescription::class);
    }
}
