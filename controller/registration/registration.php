<?php

unset($_SESSION['Already Exists']);

$conn['db'] = (new Database())->db;
$email = $_POST['email'];
$password = $_POST['password'];

if($email && $password){

    $data =  $conn['db']->query("SELECT * FROM data where email='$email'");
    $exits = $data->fetchAll();



    if($exits)
    {
        $_SESSION['Already Exists']="User is already exist";
        header('location:/register');
    }
    else{
        $statement =  $conn['db']->query("INSERT INTO data(email,password)VALUES('$email','$password')");
        // $data->execute();

        // $_SESSION['login'] = [
        //     'username' => $username
        // ];
        header('location:/');
    }

}



