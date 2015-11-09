<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.11.15
 * Time: 10:49
 */

namespace App;


class Geometry
{
    public function squareCircle($r)
    {
        return pi()*$r*$r;
    }

    public function areaRectangle($a, $b)
    {
        return $a * $b;
    }
}