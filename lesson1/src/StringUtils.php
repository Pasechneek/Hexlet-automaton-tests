<?php

namespace Lesson1\Src\StringUtilits;

function myCapitalize($text)
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
