<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $cast = [
         'data' => 'array'
    ];
    public function device(){

        return $this->belongsTo(Device::class);
    }
}
