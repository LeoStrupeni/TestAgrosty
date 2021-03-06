<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false;
    public $guarded = [];

    public function subject()
    {
        return $this->belongsTo('app\subject', 'id');
    }
}
