<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function update()
    {
        $data = [];
        $user = $this->getData();
        return $this->update;
    }
}
