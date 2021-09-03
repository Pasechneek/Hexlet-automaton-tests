<?php
namespace Lesson1\Src\StringUtilits;

require_once __DIR__ . '/../vendor/autoload.php';

function myCapitalize($text)
{
    if ($text === '') {
        return '';
   }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
