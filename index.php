<?php

require "vendor/autoload.php";


Flight::route('POST /register', function(){
    $name=Flight::request()->data->name;
    $username=Flight::request()->data->username;
    $password=Flight::request()->data->password;
    $email=Flight::request()->data->email;
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo json_encode([
            'status'=> "ok",
            'message' => "$email is a valid email address"
        ]);
    }
    else
    {
        Flight::json([
            'status' => "error",
            'message' => "$email is not valid address"
        ]);
    }
});

Flight::route('POST /login', function(){

    $username=Flight::request()->data->getData();
    $password=Flight::request()->data->getData();

    echo "Hello " . $username;
});

Flight::start();