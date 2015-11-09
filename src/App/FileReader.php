<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.11.15
 * Time: 23:15
 */

namespace App;


class FileReader {

    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function fileRead()
    {
        return file_get_contents($this->filename);
    }
}