<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_form';

$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $sql="INSERT INTO `user` ( `name`, `email`, `message`) VALUES ( '$name', '$email', '$message');";

    if(mysqli_query($conn, $sql)){
        echo"Form Submitted";
    }
    else{
        echo"Sorry!Form not submitted";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="ContactStyle.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:ital@1&display=swap" rel="stylesheet">
    <title>A responsive contact us form</title>
</head>
<body>
    <div class="container">
        <h1>Contact us</h1>
        <p>
            <form action="Contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" id="">
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="Send">
        </p>
        
    </div>
    <style>
*{
    margin:0 ;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-image: url(forest-111101.gif);
    background-size: cover;
    text-align: center;
    -webkit-text-stroke: 1px rgb(120, 115, 115);
}

h1{
    font-family: 'Playfair Display', serif;
    font-size: 59px;
    color: rgb(255, 255, 255);
    font-weight: 600;
    padding-bottom: 15px;
}
p{
    color: rgb(149, 142, 142);
    
}
p,input,textarea,label{
    font-family: 'Poppins', sans-serif;
}

.container{
    max-width: 1320px;
    margin: 0 auto;
    padding: 5%;
    background-blend-mode:;
}
form{
    max-width: 500px;
    margin: 0 auto;
    text-align: left;
    padding: 20px 0;
}
input,textarea,label{
    display: block;
    margin: 0 auto;
    width: 100%;
    color: rgb(255, 255, 255);
}
input,textarea{
    background-color: transparent;
    border: 0;
    border-bottom: solid rgb(180, 166, 139);
}
input[type=submit]{
    background-color: antiquewhite;
    padding: 15px 0;
    color: white;
    font-size: 18px;
    border-bottom: none;
    margin-top: 30px;
    transition: all .3s ease;

}
input[type=submit]:hover{
    background: lightyellow;
    color: black;
}

input,textarea{
    color: antiquewhite;
    font-size: 18px;
    padding: 8px;
}
textarea:focus{
    outline: 2px solid rgb(243, 239, 233);
}

</style>
</body>
</html>