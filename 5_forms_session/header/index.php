<h1>App Lion</h1>

<a href="clear-cookie.php">Limpar Cookie</a>

<?php
// Cookies tem uma validade e não são destruídos quando o navegador se fecha
// Sessões são destruídas quando o navegador é fechado
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    echo '<h2>' . $name . '<h2/>';
}
?>

<hr />