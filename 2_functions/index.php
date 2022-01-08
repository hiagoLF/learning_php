<?php

echo '<h2>Funções</h2> <br />';

// ........................
// ... Funções Anônimas ...
// ........................
$somar = function (int $num1, int $num2) {
    return $num1 + $num2;
};

echo 'Resultado da soma >>> ' . $somar(3, 5);

function printAsBeautifull($text)
{

    echo '<hr />';
    echo '<br /> <h2>Beautifull Printing</h2>';
    echo $text;
    echo '<br />';
    echo '<hr /> <br />';
}

printAsBeautifull($somar(5, 4));

// ........................
// .... Arrow Funcions ....
// ........................

$bringNumber = fn () => 5 * 4;

printAsBeautifull($bringNumber());

// ........................
// ......... Math .........
// ........................

echo 'Número aleatório: ' . rand(1, 20);

echo '<br />';
echo '<br />';
$money = 423421.45;
echo 'R$: '.number_format($money, 2, ',', '.');

// ........................
// ......... Date .........
// ........................

echo "<h2>Date: </h2>";
echo date('d/m/Y - H:i:s');

// strtotime
// Função que converte string de data em formato universal(yy/mm/dd) para um data