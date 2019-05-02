<?php

// ➜ ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest
use PHPUnit\Framework\TestCase;
use Askual\Bilbila;
class GenerateTest extends TestCase
{
    public function testA()
    {
      $number = '0925287357';
      $bilbila = new Bilbila\Generate($number);
      $this->assertEquals($bilbila->number,'+251925287357');
    }
}
