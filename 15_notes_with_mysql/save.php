<?php

$connection = require_once './Connection.php';

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$id = $_POST['id'] ?? '';
if ($id) {
    $connection -> updateNote($_POST['id'], $_POST);
} else {
    $connection -> addNote($_POST);
}

header('location: index.php');

