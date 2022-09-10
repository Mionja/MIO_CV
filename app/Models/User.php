<?php

namespace App\Models;

use App\Models\Age;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Education;
use App\Models\Formation;
use App\Models\HardSkill;
use App\Models\Objective;
use App\Models\SoftSkill;
use App\Models\Experience;
use App\Models\Perso_detail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationship with perso_detail
    public function perso_detail() 
    {
        return $this->hasMany(Perso_detail::class, 'user_id');
    }

    // Relationship with activity
    public function activity() 
    {
        return $this->hasMany(Activity::class, 'user_id');
    }

    // Relationship with education
    public function education() 
    {
        return $this->hasMany(Education::class, 'user_id');
    }

    // Relationship with Experience
    public function experience() 
    {
        return $this->hasMany(Experience::class, 'user_id');
    }

    // Relationship with formation
    public function formation() 
    {
        return $this->hasMany(Formation::class, 'user_id');
    }


    // Relationship with activity
    public function hardSkill() 
    {
        return $this->hasMany(HardSkill::class, 'user_id');
    }

    // Relationship with Language
    public function language() 
    {
        return $this->hasMany(Language::class, 'user_id');
    }

    // Relationship with Objective
    public function objective() 
    {
        return $this->hasMany(Objective::class, 'user_id');
    }

    // Relationship with softskill
    public function softSkill() 
    {
        return $this->hasMany(SoftSkill::class, 'user_id');
    }

    // Relationship with age
    public function age() 
    {
        return $this->hasMany(Age::class, 'user_id');
    }
}











