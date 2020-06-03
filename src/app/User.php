<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Notifications\ResetPassword;

class User extends Authenticatable
{
    use SoftDeletes, HasApiTokens, Notifiable;

    public $table = 'users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'name', 'email', 'password', 'timezone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getIsAdminAttribute() {
        return $this->roles()->where('id', 1)->exists();
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Relationships 
     */

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
    

}
