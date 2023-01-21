<?php

namespace App\DB;

use mysqli;

class DB
{
    protected mysqli $connection;

    public function __construct()
    {
        $this->connection = new mysqli("db","user","secret","glass");

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }


}