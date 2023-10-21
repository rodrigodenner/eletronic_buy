<?php

namespace app\models;

use PDO;

class Connection

{
    public static function connect(){
        $config = require "../config.php";

        $pdo = new PDO("mysql:host={$config['database']
            ['host']};dbname={$config['database']['dbname']};
            charset={$config['database']['charset']}",
             $config['database']['username'],
              $config['database']['password'],
             $config['database']['options']);
        
        return $pdo;
        
    }
}