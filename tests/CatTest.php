<?php

use PHPUnit\Framework\TestCase;

use App\Animal\Cat;

class CatTest extends TestCase
{
    public function testMeow()
    {
        $cat = new Cat('garfield');

        $message = $cat->meow();

        $required_message = 'Cat garfield is saying meow';

        $this->assertEquals($message, $required_message);
    }
}
