<?php
session_start();

if ($_SESSION['advice']) {
    echo $_SESSION['advice'];
    $_SESSION['advice'] = '';
}

require('header/index.php')
?>

<form method="POST" action="./receiver.php">
    <h1>Login</h1>

    <div>
        <label for="name">
            Nome
        </label>
        <input type="text" name="name">
    </div>

    <br />

    <div>
        <label for="email">
            E-mail
        </label>
        <input type="email" name="email">
    </div>

    <br />

    <div>
        <label for="idade">
            Idade
        </label>
        <input type="text" name="age">
    </div>

    <br />

    <button type="submit">Entrar</button>
</form>