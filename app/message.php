<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    public $table = 'message';
    public $primaryKey = 'id';
    public $timestamps = false;
    public $guarded = [];

    public function subject()
    {
        return $this->belongsTo('app\subject', 'id');
    }

}
