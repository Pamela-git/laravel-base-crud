<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
      'name',
      'model',
      'price',
      'consumption'
    ];
}
