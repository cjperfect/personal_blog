<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = ['banner', 'personal', 'gallery', 'loveNote', 'contact', 'important_time'];
    public $timestamps = true;
}
