<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';
    public $timestamps = false;

    protected $primaryKey = 'id';

    public function api(){
        return $this->belongsTo(Api::class);
    }
}
