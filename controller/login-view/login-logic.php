<?php
//require 'connection.php';

$conn['db'] = (new Database())->db;


$email = $_POST['email'];

$password = $_POST['password'];



if($email && $password)
{
    $data = $conn['db']->query("SELECT * FROM data where email='$email' and password = '$password'");
    $exits = $data->fetchAll();
    if($exits)
    {
        $_SESSION['login'] = [
            'email' => $email
        ];
        header('location:/');
    }
    else{
       $_SESSION['Incorrect Details'] = "Incorrect Details";
        header('location:/login');
    }
}