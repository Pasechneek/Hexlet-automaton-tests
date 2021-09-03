<?php
namespace Lesson1\Tests\StringUtilitsTest;

use Webmozart\Assert\Assert;
use function Lesson1\Src\StringUtilits\myCapitalize;

//require_once 'src/StringUtils.php';
require_once __DIR__ . '/../vendor/autoload.php';

function MyFirstAutomatonTest()
{
echo "test starts!\n";

Assert::eq(myCapitalize('hello'), 'Hello');
Assert::eq(myCapitalize(''), '');

//if (myCapitalize('hello') !== 'Hello') {
//  throw new \Exception('Функция работает неверно!');
//}

//if (myCapitalize('') !== '') {
  //  throw new \Exception('Функция работает неверно!');
 // }
  echo "\neverything is OK\n";
}
