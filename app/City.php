<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];

    protected $table = 'cities';
}
