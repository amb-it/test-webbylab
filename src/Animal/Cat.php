<?php

namespace App\Animal;

use App\Animal;

class Cat extends Animal
{
    public function meow()
    {
        return 'Cat ' . $this->getName() . ' is saying meow';
    }
}
