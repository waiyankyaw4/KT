<?php

class createpoststable
{

    public static function poststable($pdo)
    {
    
try {$query="CREATE TABLE IF NOT EXISTS posts(
id INIT AUTO_INCREMENT PRIMARY KEY, 
title varchar(255) NOT NULL UNIQUE,
slug varchar(255) NOT NULL UNIQUE,
body varchar(255) NOT NULL ,
thumbnail varchar(255),
isPublished varchar(50) default 1,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

$stm= $pdo->prepare($query);
$stm->execute();
    
} catch (\Throwable $th) {
    die($th->getMessage());

    
}
        
    }
}

