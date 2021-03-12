<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    protected $fillable = ['username', 'password', 'loginIp', 'flag'];
    protected $hidden = ['password'];
    public $timestamps = true;
}
