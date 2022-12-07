<?php

function findTheElement($class, $array)
{
    $array = $array;

    foreach ($array as $element) {
        if ($class == $element->class) {
            return $element;
        }
    }

    return false;
}
