<?php

require_once('config.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $query = mysqli_query($connection, "SELECT * FROM user WHERE email_address='$email' ");

    if(mysqli_num_rows($query)>=1){
        echo "Email a already exist! try with anoter email";
    }
    else {
        $query = mysqli_query($connection, " INSERT INTO user (email_address) VALUES ('$email') ");
        echo "Submitted successfully";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name= "email" >
        <input type="submit" value="submit" name="submit">
    </form>


</body>
</html>