<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_form';

$conn = mysqli_connect($host, $username, $password, $dbname);

$sql = "SELECT * FROM `user`;";

$result_sql = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="ContactStyle.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:ital@1&display=swap" rel="stylesheet">
    <title>Please Log into yoyr account</title>
</head>

<body>
    <div class="container">
        <h1>Welcome!!</h1>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php
            while ($result = mysqli_fetch_array($result_sql)) {

            ?>
                <tr>
                    <td><?php echo $result['name'] ?></td>
                    <td><?php echo $result['email'] ?></td>
                    <td><?php echo $result['message'] ?></td>
                </tr>
            <?php } ?>

        </table>
    </div>
    <div>
        <a href="login.php"><button class="logout">Logout</button></a>
        <a href="Contact.php"><button class="logout">Contact</button></a>
    </div>
    

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url(https://images.unsplash.com/photo-1680547005635-789a3b54b8d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1228&q=80);
            background-size: cover;
            text-align: center;

        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 59px;
            font-weight: 600;
            padding-bottom: 15px;
        }

        .container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 5%;

        }

        .table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1% solid;

        }

        table,
        th,
        td {
            border: 1px solid;
            background-color: white;
        }

        .logout {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .logout:hover {
            background: lightyellow;
            color: black;
        }
    </style>
</body>

</html>