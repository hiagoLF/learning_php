<?php

function findUrlQuery($queryName)
{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url_components = parse_url($url);
    parse_str($url_components['query'], $queries);
    $date = $queries[$queryName];
    return $date;
}

$dateQuery = findUrlQuery('date');
$weekDayNumber = date('w', strtotime($dateQuery));
$dateFormated = date('d/m/Y', strtotime($dateQuery));

$weekDays = [
    "Domingo",
    "Segunda Feira",
    "Terça Feira",
    "Quarta Feira",
    "Quinta Feira",
    "Sexta Feira",
    "Sábado"
];

echo $dateFormated.' - '.$weekDays[$weekDayNumber];