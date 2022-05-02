<?php

    session_start();

    require_once('config.php');
    


    if(isset($_POST['login'])){
        

        $email = $_POST['email_address'];
        $password = $_POST['password'];

        $result = mysqli_query($connection, "SELECT * FROM user WHERE email_address= '$email'");



        if(mysqli_num_rows($result) == 1){

            $query = mysqli_query($connection, "SELECT password FROM user WHERE email_address= '$email' ");

           $row = mysqli_fetch_assoc($query);
             echo $row['password'];

             if($password == $row['password']){
                 $_SESSION['success'] = "logged in";

                 echo $_SESSION['success'];
             }
           

            

        }
        else {
            echo "email does not exist!";
        }

        

   
            

        }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration">
        <form action="" method="POST">



            <label for="email_address">Email Address</label> <br>
            <input type="email_address" name="email_address" id="email_address"> <br>



            <label for="password">PASSWORD</label> <br>
            <input type="password" name="password" id="password"> <br>


            <input type="submit" value="Log In" name="login">

        </form>

    </div>
</body>
</html>