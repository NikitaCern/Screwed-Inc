<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $table = 'users';
    protected $primaryKey = 'personal_number';
    protected $fillable = [
        'personal_number' ,'first_name' ,'last_name' ,'post' ,'email','password' ,'roles'
      ];

    protected $hidden = [
        'password'
      ];
}
