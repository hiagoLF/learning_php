<?php
$login = filter_input(INPUT_POST, 'login');
$password = filter_input(INPUT_POST, 'password');
// false if not exists

echo $login ? "Login $login" : header('Location: index.php');
echo '<br />';
echo $password ? "Login $password" : header('Location: index.php');


