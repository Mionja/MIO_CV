<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['name', 'about', 'start', 'end'];
    use HasFactory;
}
