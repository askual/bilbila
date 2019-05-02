<?php

// ➜ ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest
use PHPUnit\Framework\TestCase;
class EmptyTest extends TestCase
{
    public function testFailure()
    {
        // $this->assertEmpty(['Valuebound' ]);
        $this->assertContains(2, [1,2,3]);
    }
    public function testFailure2()
    {
        $this->assertEmpty([ ]);
        // $this->assertContains([4, [1,2,3]]);
    }
}
