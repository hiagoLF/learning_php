<?php
session_start();
$_SESSION['name'] = '';
header('Location: login.php');
