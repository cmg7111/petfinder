<?php
    $host = 'localhost';
    $user = 'phpmyadmin';
    $pw 
    $dbName = 'petfinder';
    $dsn = "mysql:host=localhost;port=3306;dbname=$dbName;charset=utf8"; 

    try { 
    	$conn = new PDO($dsn, $user, $pw); 
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) { echo $e->getMessage(); }
 ?>
