<?php
$names = file_get_contents('names.txt');
$namesList = explode("\n", $names);

foreach ($namesList as $key => $name) {
    $namesList[$key] = "<li>$name</li>";
}
?>

<h3>Nomes</h3>
<form action="name-receiver.php" method="POST">
    <input type="text" name='name' autofocus>
    <button type="submit">Salvar</button>
</form>
<hr />
<ul>
    <?php foreach ($namesList as $nameToDisplay) {
        echo $nameToDisplay;
    } ?>
</ul>