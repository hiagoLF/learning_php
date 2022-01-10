<?php
session_start();

if ($_SESSION['name']) {
    header('Location: index.php');
}
?>

<form action="receiver.php" method="POST">
    <h3>Qual o seu nome?</h3>

    <input type="text" name='name'>

    <br />
    <br />

    <button type="submit">Salvar</button>
</form>