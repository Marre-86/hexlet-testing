<?php

namespace App\StringUtils;
require_once __DIR__ . '/../vendor/autoload.php';
use Funct\Collection;

function capitalize($text)
{
    $firstSymbol = strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}

$result = Collection\firstN([1, 2, 3]);
print_r($result);
