<?php

session_start();

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$age = filter_input(INPUT_POST, 'age');
// false if not exists


if (!$name || !$email || !$age) {
    $_SESSION['advice'] = 'Preencha os items corretamente!';
    header("Location: index.php");
    exit;
} else {

    $expiration = time() + (86400 * 30);
    setcookie('name', $name, $expiration);

    echo "Nome: $name <br />";
    echo "Email: $email <br />";
    echo "Idade: $age <br />";
}
