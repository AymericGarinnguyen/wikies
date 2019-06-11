<?php

$pdo = new PDO("mysql:host=localhost;dbname=wikies", "aymeric", "monpassword");

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();