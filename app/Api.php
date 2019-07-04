<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'api';
    public $timestamps = false;

    protected $primaryKey = 'id';

    public function routes(){
        return $this->hasMany(Route::class);
    }

    public function database(){
        return $this->hasOne(Database::class);
    }
}
