<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['title', 'pic', 'author', 'photoAddress', 'photoTime', 'description'];
    public $timestamps = true;
}
