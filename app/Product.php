<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function update()
    {
        return $this->update;
    }
}
