<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $table = 'database';
    public $timestamps = false;

    protected $primaryKey = 'id';
}
