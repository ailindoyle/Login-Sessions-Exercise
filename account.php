<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$correctUsername = 'Chicken Nugget';
$correctPassword = 'Chocolate Pudding';

function checkCredentials ($username, $password, $correctUsername, $correctPassword) {

    if ($username==$correctUsername&&$password==$correctPassword || $_SESSION['loggedIn']==TRUE) {
        $_SESSION['loggedIn']=TRUE;
        return 'Logged in';
    } else {
        $_SESSION['loggedIn']=FALSE;
        header('Location: index.php');
        exit;
    }

}

echo checkCredentials($username, $password, $correctUsername, $correctPassword);
