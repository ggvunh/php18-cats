<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];



    protected $table = 'categories';
}
