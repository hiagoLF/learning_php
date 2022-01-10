<?php
$newName = filter_input(INPUT_POST, 'name');

$names = file_get_contents('names.txt');
file_put_contents('names.txt', $names."$newName\n");

header('Location: exercice.php')
?>