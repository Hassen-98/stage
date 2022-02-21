<?php
$host="localhost";
$databaseName="db-stage";
$username="root";
$password="";
$dsn= "mysql:host=$host;dbname=$databaseName";
$db = new PDO ($dsn, $username, $password);