<?php
//...............
// Variáveis
// ..............
$name = 'Hiago';
$age = 18;
$city = 'Iguaí';

// .= Concatenação de Strings
$name .= ' Ferreira';

$sentence = "HI! My name is $name. I am $age old and I am born in $city <br />";

echo $sentence;

$languagesILike = [
    "Node",
    "Python",
    "TypeScript",
    "React",
    "ReactNative"
];

// Spread operator é aceito no PHP
$iLikeMoreOne = [
    ...['Spring'],
    ...$languagesILike
];

print_r($iLikeMoreOne);

echo "<br />";
//...............
// Condições
// ..............

if ($age < 18) {
    echo "Essa pessoa é menor de idade";
} else {
    echo "O cara é maior de idade.";
}
echo "<br />";

// Compatibilidade com operador ternário
echo ($age < 18) ? "Essa pessoa é menor de idade" :  "O cara é maior de idade.";

// Verificar se a variável está setada
$variavel = 'Um frase qualquer';
isset($valiavel);

// Outa maneira de operador ternário
// Operador Nullcall
// Variável 1 ?? Variável 2

// ..............
// ... While ....
// ..............

echo "Agora vamos contar";
$count = 1;

while ($count <= 10) {
    echo "<br />";
    echo "N: " . $count;
    $count += 1;
};

// ..............
// .... Loop ....
// ..............
echo "<br /> ---------";
echo "<br />";

for ($num = 0; $num <= 10; $num++) {
    echo "N: " . $num . " <br />";
}

// ...................
// ...Foreach / For...
// ...................
echo "<h2> Linguagens que eu amo </h2>";
echo '<ul>';
foreach ($languagesILike as $key => $language) {
    echo "<li> $key -> $language </li>";
}
echo '</ul>';

echo "<br /> Exercício 1";
for ($index = 0; $index <= 10; $index++) {
    echo '<br />';
    for ($beta = 0; $beta <= 10; $beta++) {
        echo '-';
    };
};

echo "<br /> Exercício 2";
for ($a = 0; $a <= 10; $a++) {
    echo '<br />';
    for ($b = 0; $b <= $a; $b++) {
        echo '-';
    };
};


// ...................
// ..... Funções .....
// ...................

function listLanguages($languages = [])
{
    echo "<hr />";
    echo '<h2>My languages</h2>';

    foreach ($languages as $lang) {
        echo "<br /> $lang";
    };
};
listLanguages($languagesILike);

function sum(int $num1, int $num2)
{
    return $num1 + $num2;
}

echo "<h3>Soma: </ h3>";
echo sum(3, 3);
