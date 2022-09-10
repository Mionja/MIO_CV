<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['user_id','name', 'about', 'start', 'end'];
    use HasFactory;

    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
