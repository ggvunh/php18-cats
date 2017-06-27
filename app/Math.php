<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Math extends Model
{
    public static function sum($a, $b)
    {
      if (!is_numeric($a)) {
        return 'a invalid';
      }

      if (!is_numeric($b)) {
        return 'b invalid';
      }
      $sum = $a + $b;
      return $sum;
    }
}
