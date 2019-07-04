<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $table = 'database';
    public $timestamps = false;

    protected $primaryKey = 'id';

    public function api(){
        return $this->belongsTo(Api::class);
    }
}
