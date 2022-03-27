<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $keyType = 'string';
    public $timestamps = false;
    protected $primaryKey = 'phone';
    protected $guarded = [];
}
