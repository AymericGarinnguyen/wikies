<?php

$pdo = new PDO("mysql:host=localhost;dbname=wikies", "aymeric", "monpassword");

$user = $pdo->query('SELECT * FROM user')->fetchAll();