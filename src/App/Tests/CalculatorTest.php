<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.11.15
 * Time: 20:40
 */

namespace App\Tests;

use App\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider addProvider
     */
    public function testAdd($ex, $a, $b)
    {
        //$this->markTestIncomplete('This test has not been implemented yet.');
        $calc = new Calculator();
        $this->assertEquals($ex, $calc->add($a, $b));
        $this->assertTrue($ex == $calc->add($a,$b));
    }
    /**
     * @dataProvider multiplProvider
     */
    public function testMultipl($ex, $a, $b)
    {
        $calc = new Calculator();
        $this->assertEquals($ex, $calc->multipl($a, $b));
    }

    public function addProvider()
    {
        return [
            [4, 2, 2],
            [8, 5, 3],
            [9, 3, 6],
        ];
    }
    public function multiplProvider()
    {
        return [
            [6, 2, 3],
            [10, 2, 5],
            [12, 6, 2],
        ];
    }

    /**
     * @dataProvider squareProvider
     */


    public function testSquare($expected, $a)
    {
        $square = new Calculator();
        $this->assertEquals($expected, $square->square($a));
    }

    public function squareProvider()
    {
        return [
          [4,2],
          [36,6],
          [64,8]
        ];
    }

    /**
     * @dataProvider addToArrayProvider
     */


    public function testAddToArray($expected, array $array, $a)
    {
        $this->assertTrue(is_array($array));
        $this->assertContainsOnly('int',$array);

        $math = new Calculator();
        $massPlus = $math->addToArray($array, $a);
        $this->assertEquals($expected,$massPlus[0]);

        $massPlus = $math->addToArray($massPlus,$a);
        $this->assertCount(count($array),$massPlus);

    }

    public function addToArrayProvider()
    {
        return
            [
                [3, [1, 2, 3], 2],
                [5, array(2, 6, 6), 3],
                [10, [5, 5, 5], 5]
            ];
    }
}