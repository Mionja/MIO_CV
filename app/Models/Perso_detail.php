<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perso_detail extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'address', 'email', 'num', 'photo'];
}
