<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perso_detail extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'nom', 'address', 'email', 'num', 'photo'];

     //Relationship to user
     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
}
