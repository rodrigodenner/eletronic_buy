<?php

namespace app\models;

abstract class Model
{
    protected $connection;

    public function __construct(){
        
        $this->connection = Connection::connect();
    }
}