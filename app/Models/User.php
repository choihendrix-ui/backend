<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
public function company()
{
    return $this->belongsTo(Company::class);
}

    use HasApiTokens, HasFactory, Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
public function company()
{
    return $this->belongsTo(Company::class);
}

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
<<<<<<< HEAD
     * @var list<string>
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
<<<<<<< HEAD
    ];

    /**
     * The attributes that should be hidden for arrays and JSON.
     *
     * @var array<int, string>
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
    ];

    /**
     * The attributes that should be hidden for arrays and JSON.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
<<<<<<< HEAD
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

     * Get the attributes that should be cast.
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

