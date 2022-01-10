<?php
$text = file_get_contents('text.txt');
$paragraphs = explode("\n", $text);

echo 'Parágrafos: ' . count($paragraphs);
echo '<br />';
echo '<br />';
echo $text;
