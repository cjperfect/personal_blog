<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Us extends Model
{
    protected $fillable = ['sheName', 'heName', 'sheDescription', 'heDescription', 'shePic', 'hePic', 'sheSex', 'heSex'];
    public $timestamps = true;
}
