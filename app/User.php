<?php

namespace App;

use App\DB\DB;

class User extends DB
{

    public function addUser(string $name, string $surname, string $login, string $email, int|string $password): bool
    {


        $stmt = $this->connection->prepare("INSERT INTO users (username, surname, login, email, password) 
VALUES (?, ?, ?, ?, ?)");

        if($stmt){

            $stmt->bind_param("sssss", $name, $surname, $login, $email, $password);

            if($stmt->execute()){
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->errno;
                return false;
            }

        }
        $stmt->close();

        return true;

    }

    public function login(string $login, int|string $password){
        $result = $this->connection->prepare("SELECT login,password FROM users WHERE login = ? ");

        $result->bind_param("s", $login);
        $result-> execute();
        $res = $result->get_result();
        $row = $res->fetch_assoc();

        if ($row['password'] === $password){

            return true;

        };

    }

}
