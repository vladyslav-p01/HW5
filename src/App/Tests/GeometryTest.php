<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.11.15
 * Time: 11:51
 */

namespace App\Tests;


class GeometryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider squareCircleProvider
     */
    public function testSquareCircle($expected,$r)
    {
        $this->assertEquals($expected,pi()*$r*$r);
    }

    public function squareCircleProvider()
    {
        return
            [
              [4*pi(),2],
              [100*pi(),10]
            ];
    }

    public function areaRectangle($expected, $a, $b)
    {
        $this->assertEquals($expected, $a * $b);
    }
}