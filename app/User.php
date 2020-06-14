<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $table = 'users';
    protected $rememberTokenName=false;
    protected $fillable = [
        'personal_number' ,'first_name' ,'last_name' ,'post' ,'email','password' ,'roles','preferred_language'
      ];

    protected $hidden = [
        'password'
      ];
    public function hasRole($role)
    {
        return $this->roles == $roles;
    }
}
