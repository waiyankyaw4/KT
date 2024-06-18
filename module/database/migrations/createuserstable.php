<?php
class createuserstable
{
    public static function userstable()

    {
        try {$query="CREATE TABLE IF NOT EXISTS users(
id INIT AUTO_INCREMENT PRIMARY KEY, 
username varchar(255) NOT NULL UNIQUE,
email varchar(255) NOT NULL UNIQUE,
password varchar(255) NOT NULL ,
thumbnail varchar(255),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

$stm= $pdo->prepare($query);
$stm->execute();

            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

