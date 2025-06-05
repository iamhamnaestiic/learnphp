<?php

$name = "Hamna Kaifi";
$age = 20;
$contact = "1234567890";
$email = "abc@email.com";
$address = "123 Street Name, City, Country";


$users = array(
    array("name" => "Hamna Kaifi", "age" => 20, "contact" => "1234567890", "address" => "123 Street Name, City, Country", "email" => "abc@email.com")
 ,   array("name" => "John Doe", "age" => 25, "contact" => "9876543210", "address" => "456 Another St, City, Country", "email" => "john@deo.com"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <title>PHP Example</title>
</head>
<body>
<h1>Welcome to My PHP Page</h1>

<?php include "includes/partials/nav.php"; ?>

<b>Name:</b><span> <?php echo $name ?></span><br>
<b>Age:</b><span> <?php echo $age ?></span><br>
<b>Contact:</b><span> <?php echo $contact ?></span><br>
<b>Address:</b><span> <?php echo $address ?></span><br>
<b>Email:</b><span> <?php echo $email ?></span><br>



<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Email</th>
    </tr>
        <?php foreach ($users as $user): ?>
    <tr>
            <?php
            $name = $user['name'];
            $age = $user['age'];
            $contact = $user['contact'];
            $address = $user['address'];
            $email = $user['email'];
            ?>

        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['age'] ?></td>
        <td><?php echo $user['contact'] ?></td>
        <td><?php echo $user['address'] ?></td>
        <td><?php echo $email ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
