<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
   protected $fillable = [
    'user_id',
    'name',
    'device_type',
    'device_identifier',

   ];

   public function user(): BelongsTo
   {
     return $this->belongsTo(User::class);
   }

   public function sensor(){
       return $this->hasMany(Sensor::class);
   }
}
