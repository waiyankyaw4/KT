<?php
class connection 
{


    public static function make($config)
    {
        
try {
    return new POD(
        'mysql:hopst='.$config['host'].';dbname='.$config['dbname'],$config['user'],$config['password']
        "mysql:host=127.0.0.1;dbanme=ucskt",'root','');
} catch (\Throwable $th) {
    die($th->getMessage());
}
}
}
