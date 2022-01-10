<?php
$text = 'Pra testar outra vez';

file_put_contents('created-file.txt', $text);

echo 'Arquivo criado';

$theText = file_get_contents('created-file.txt');

echo '<br />';

echo $theText;
