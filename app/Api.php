<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'api';
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];
}
