<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Peson extends Model
{
    protected $fillable = ['name'];

    protected $table = 'person';
}
