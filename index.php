<?php

require __DIR__ . '/vendor/autoload.php';

use App\Animal\Cat;

$cat = new Cat('garfield');

$result = 'Result: ';

if ($cat->getName() === 'garfield') {
    $result .= 'First statement is true.';
}

if ($cat->meow() === 'Cat garfield is saying meow') {
    $result .= ' And the second one is true too.';
}

echo $result;