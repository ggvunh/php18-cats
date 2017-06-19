<?php

namespace Furbook;
// use Furbook\Cat;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public $timestamps = false;

    public function cats(){
      return $this->hasMany('Furbook\Cat');
    }
}
