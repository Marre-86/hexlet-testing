<?php

namespace App\Tests;

require_once __DIR__ . '/../vendor/autoload.php';
use Webmozart\Assert\Assert;
use App\StringUtils; 

Assert::eq(StringUtils\capitalize('hello'), 'Hello');

//if (StringUtils\capitalize('hello') !== 'Hello') {
//    echo "Мне нужно чтоб твой говнокод выводил 'Hello', a не ";
//    echo StringUtils\capitalize('hello') . " долбоёб! \n";
//    throw new \Exception('Функция работает неверно!');
//}

Assert::eq(StringUtils\capitalize(''), '');


//if (StringUtils\capitalize('') !== '') {
//    throw new \Exception('Функция работает неверно!');
//}

echo 'Все тесты пройдены!' . "\n";
