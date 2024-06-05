<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $table =  "industry";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
