<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.11.15
 * Time: 23:26
 */

namespace App\Tests;


class FileReaderTest extends \PHPUnit_Framework_TestCase {

    public function testFileReader()
    {
        $stubFile = $this->getMockBuilder('App\FileReader')
            ->disableOriginalConstructor()
            ->getMock();

        $stubFile->expects($this->any())
            ->method('fileRead')
            ->will($this->returnValue("The content of the file"));


        $stubFile->fileRead();
        $this->assertNotContains("http", $stubFile->fileRead());
        $this->assertEquals("The content of the file", $stubFile->fileRead());

    }




}
