<?php global $conn;
require 'includes/dbcon.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noorani Qaida</title>
</head>
<body>
<?php
$sql = "SELECT * FROM lessons";
$result = $conn->query($sql);
?>
if ($result && $result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    ?>

<table>
    <thead>
    <tr>
        <th> ID </th>
        <th> Lesson Name </th>
        <th> Lesson Description </th>
        <th> Possible Mistakes </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php ?></td>
        <td><?php ?></td>
        <td><?php ?></td>
        <td><?php ?></td>
    </tr>
    <?php
}else {
    echo "No lessons found.";
} ?>
    </tbody>
</table>



</body>
</html>