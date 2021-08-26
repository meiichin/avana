<?php

/**
 * Make function who return the index of close tag from string
 *
 * @param String $string
 * @param Integer $index
 * @return Integer
 */
function test1(String $string, Int $index)
{
    // make default value
    $position  = 0;
    $open   = 0;
    $close  = 0;

    // loop string from index param
    for ($i=$index; $i < count(str_split($string)); $i++) { 
        // count opening from index param
        ($string[$i] == "(") ? $open++ : ""; 

        // count clossing from index param
        ($string[$i] == ")") ? $close++ : ""; 

        // break when opening and closing equal
        if ($open == $close) {
            $position = $i;
            break;
        }
    }

    return $position;
}

echo test1("a (b c (d e (f) g) h) i (j k)", 2);