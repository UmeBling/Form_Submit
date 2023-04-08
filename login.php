<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_form';

$conn = mysqli_connect($host, $username, $password, $dbname);
$login=true;

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql="SELECT * FROM `admin` WHERE email='$email' AND password='$password';";

    $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1){
    $login=true;
    header("location: Dashboard.php");
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
    <title>Please Log into your account</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <p>
            <form action="login.php" method="POST">
                
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
                <label for="password">Password</label>
                <input type="password" name="password" id="">
                <input type="submit" name="submit" value="Login">
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