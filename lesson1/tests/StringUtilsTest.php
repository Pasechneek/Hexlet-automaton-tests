<?php
namespace lesson1\tests\StringUtilitsTest;

use function lesson1\src\StringUtilits\myCapitalize;

require_once 'src/StringUtils.php';

//function stringUtilitsTest() {
echo "test starts!\n";
if (myCapitalize('hello') !== 'Hello') {
  throw new \Exception('Функция работает неверно!');
}

if (myCapitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
  }

  echo "\neverything is OK\n";
//}
