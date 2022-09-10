<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftSkill extends Model
{
    protected $fillable = ['name','user_id'];
    use HasFactory;

    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
