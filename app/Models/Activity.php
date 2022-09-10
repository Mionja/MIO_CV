<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['user_id','name'];
    use HasFactory;

    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
