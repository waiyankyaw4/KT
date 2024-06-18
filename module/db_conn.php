<?php

$config =require "config.php";

require "database/connection.php";
require "database/migrations/createuserstable.php";
require "database/migrations/createpoststable.php";

$pdo= connection::make($config['database']);

createuserstable::userstable($pdo);
createpoststable::poststable($pdo);