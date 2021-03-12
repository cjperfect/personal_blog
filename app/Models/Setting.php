<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['keyword', 'description', 'email', 'address', 'phone', 'copyright', 'visited'];
    public $timestamps = true;
}
