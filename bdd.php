<?php

$mysqlConnection = new PDO(
    'mysql:host=localhost; dbname=diversability; charset=utf8',
    'root',
    ''
);


try
{
	$db = new PDO('mysql:host=localhost; dbname=diversability; charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


