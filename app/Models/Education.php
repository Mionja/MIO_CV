<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['user_id','degree', 'school', 'grade', 'year'];
    use HasFactory;
}
