<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public $table = 'subjects';
    public $primaryKey = 'id';
    public $timestamps = false;
    public $guarded = [];
}
