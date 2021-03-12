<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'hot', 'author', 'content', 'pic', 'isShowHome'];
    public $timestamps = true;

    public function getUpdatedAtAttribute($value)
    {
        return date("Y-m-d", strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date("Y-m-d", strtotime($value));
    }

}
