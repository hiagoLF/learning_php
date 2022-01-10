<?php
session_start();

if ($_SESSION['name']) {
    echo 'Olá ' . $_SESSION['name'];
} else {
    header('Location: login.php');
}
?>

<br />
<br />

<a href="clear-session.php">Apagar Sessão</a>