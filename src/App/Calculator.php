<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.11.15
 * Time: 20:41
 */

namespace App;


class Calculator
{

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multipl($a, $b)
    {
        return $a * $b;
    }

    public function square($a)
    {
        return $a*$a;
    }

    public function addToArray(array $inputArray, $a)
    {
        if (is_array($inputArray)) {
            $outputArray = [];
            foreach ($inputArray as $element) {
                $element += $a;
                $outputArray[] = $element;
            }
            return $outputArray;
        }

        return false;
    }


}
