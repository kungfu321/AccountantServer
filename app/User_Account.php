<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Account extends Model
{
    protected $fillable = ['username', 'email', 'phone', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
