<?php
$server = 'localhost';
$username = 'root';
$password = '';

//The name of the schema we created earlier in MySQL workbench
$schema = 'project';


$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

//$pdo = new PDO('mysql:dbname=assessment;host=localhost','root','');

?>