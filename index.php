<?php
require __DIR__ . "/vendor/autoload.php"; 

$client = new Google\Client;  

$client->setClientId("74571568183-ve0iskoi3irb1gpt38the5q63vntdr3n.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/redirect.php");

$client->addScope("email");
$client->addScope("profile");

$url = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            /* Gradient background with pink and purple colors */
            background:  #F3D8C7;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: 93%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        

        .google-button {
            display: flex;
            align-items: center;
            background-color: #F4F4F4;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .google-button:hover {
            background-color: lightblue;
        }
        .google-icon {
            width: 20px;
            height: 20px;
            margin-left: 58px;
        }
        a{
            margin-left: 5px;
            color: white;
        }
      

    </style>
</head>
<body>
<div class="login-container">
        <div class="login-box">
            <h2>Welcome</h2>
            <form>
                <div class="input-group">
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password">
                </div>
                <button type="submit" class="login-btn">Log In</button>
                <button class="google-button">
                 <img src="logo.png"  class="google-icon">
               <a href="<?= $url ?>">Sign in with Google</a>
</body>
</html>
