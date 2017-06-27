<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Furbook\Math;

class MathTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testSum()
    {
      // a invalid
      $result = Math::sum('a', 1);
      $this->assertEquals('a invalid', $result);

      // b invalid
      $result = Math::sum(1, 'b');
      $this->assertEquals('b invalid', $result);

      // test a, b right
      $result = Math::sum(3, 7);
      $this->assertEquals(10, $result);
    }
}
