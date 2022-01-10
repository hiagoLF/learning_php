<?php
    session_start();
    $name = filter_input(INPUT_POST, 'name');
    
    if(!$name){
        header('Location: login.php');
    }else{
        $_SESSION['name'] = $name;
        header('Location: index.php');
    }
