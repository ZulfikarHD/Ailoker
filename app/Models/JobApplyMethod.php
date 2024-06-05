<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplyMethod extends Model
{
    use HasFactory;
    protected $table = "job_apply_method";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
