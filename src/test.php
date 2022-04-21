<?php
namespace gamboamartin\test;

use base\conexion;
use config\database;
use PDO;
use PHPUnit\Framework\TestCase;



class test extends TestCase{
    public  PDO $link;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $con = new conexion();

        $this->link = conexion::$link;
        if(!defined('UT')) {
            define('UT', true);
        }

    }


}
