<?php
namespace gamboamartin\test;

use PDO;
use PHPUnit\Framework\TestCase;



class test extends TestCase{
    public  PDO $link;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $config = new config();

        $link = new PDO("mysql:host=$config->DB_HOST;dbname=$config->DB_NAME", $config->DB_USER, $config->DB_PASSWORD);

        $link->query("SET NAMES 'utf8'");
        $sql = "SET sql_mode = '';";
        $link->query($sql);
        $consulta = 'USE '.$config->DB_NAME;
        $link->query($consulta);

        $this->link = $link;
    }


}
