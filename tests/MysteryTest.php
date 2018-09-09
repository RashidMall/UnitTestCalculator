<?php
declare(strict_types=1);
include('app/Mystery.php');

use PHPUnit\Framework\TestCase;

final class mysteryTest extends TestCase
{
  public function testTrueIfNumberIsGreaterThan3(){
    $this->assertTrue(Mystery::isGameOver(4));
  }

  public function testFalseIfNumberIsLessThanOrEqual3(){
    $this->assertFalse(Mystery::isGameOver(2));
  }

/*   public function testNumber1CanBeUnderstood(){
    $this->assertEquals('1', Mystery::calculate('1'));
  }

  public function testNoInput(){
    $this->assertEquals('0', Mystery::calculate(null));
  }
  
  public function testEmptyInput(){
    $this->assertEquals('0', Mystery::calculate(""));
  }

  public function testAddition(){
    $this->assertEquals(3, Mystery::calculate('1+2'));
  } */
}


?>