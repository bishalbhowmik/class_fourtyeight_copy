
<?php

    require_once ('config.php');

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User</title>
    <link rel="stylesheet" href="css/display.css">
</head>
<body>
    

<div class="table-area">
<table>

<tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email Address</td>
        <td>Password</td>
    </tr>


    <?php
        $query = $connection->query("SELECT * FROM user");

        while($row = $query->fetch_object()) : ?>
    <tr>
        <td><?php echo $row->first_name ; ?></td>
        <td><?php echo $row->last_name ; ?></td>
        <td><?php echo $row->email_address ; ?></td>
        <td><?php echo $row->password ; ?></td>
    </tr>

    <?php endwhile; ?>

</table>

</div>
</body>
</html>