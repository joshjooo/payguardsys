<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
     protected $primaryKey = 'user_id';

     public $timestamps = false;

    protected $fillable = [
        'user_name', 'user_email', 'user_password','user_mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password',
    ];

    public function getAuthPassword()
        {
            return $this->user_password;
        }
   
}