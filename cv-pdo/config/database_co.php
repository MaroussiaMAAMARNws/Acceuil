// Connexion à la base de données

<?php
$dsn = 'mysql:host=localhost:10004;dname=local;chartset=utf8';
$username = 'root';
$password = 'root';
$pdo = new PDO($dsn, $username, $password);
?>