<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobDetails extends Model
{
    use HasFactory;
    protected $table =  "job_details";

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the jobs that owns the JobDescription
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jobs(): BelongsTo
    {
        return $this->belongsTo(Jobs::class);
    }
}
