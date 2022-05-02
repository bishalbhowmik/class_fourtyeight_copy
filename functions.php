<!-- 

<?php

    function email_exists (){

        global $email;

        global $result;
        global $connection;

        $result = $connection->query("SELECT * FROM user WHERE email_address='$email' ");

        if(mysqli_num_rows($result) == ){
            return true;
        }
    }

?> -->