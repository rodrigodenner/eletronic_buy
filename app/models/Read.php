<?php

namespace app\models;

use PDO;

class Read extends Model
{
    public function all($table, $fields= '*'){
        try {

            $query = $this->connection->query("SELECT {$fields} FROM {$table}");
            $query->execute();
            return $query->fetchAll();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }

    }

    public function find($id, $table, $fields = '*') {
        try {
            $query = $this->connection->prepare("SELECT {$fields} FROM {$table} WHERE id = :id");
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
    
}