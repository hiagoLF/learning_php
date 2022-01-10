<?php

// Include não quebra o programa mesmo se o arquivo não existir
include('not_existing.php');

include('header.php');

require('header.php');

// Se o arquivo já tiver sido importado, ele não importa outra vez
require_once('header.php');


require('user.php');
('user.php');

echo 'Nome: ' . $userName.'<br />';
echo 'Password: ' . $password.'<br />';

require('./components/home.php');
require('./components/about.php');