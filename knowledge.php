<?php

$a = 'Мои знания на';
$b = 100;
$c = '%'; 

$price = 16;

if ($price >= 15 && $price <= 20)
    $d = 'Это число находится между 15 и 20';

$operations = [
    '100 % 3' => 100 % 3,
    '100 / 3' => 100 / 3,
    '100 * 3' => 100 * 3,
    '100 + 3' => 100 + 3,
    '100 - 3' => 100 - 3,
];

$types = [
    'string',
    1,
    1.2,
    null,
    true,
];