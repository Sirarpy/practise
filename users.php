<?php
include_once "db.php";
$connect = connect_db();
$query = "SELECT * FROM `registr` WHERE 1";
$result = mysqli_query($connect,$query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>

<table class="table" border="1" cellspacing="10">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <tr scope="col">First Name</tr>
        <tr scope="col">Last Name</tr>
        <tr scope="col">Picture</tr>
        <tr scope="col">Email</tr>
        <tr scope="col">Date</tr>
        <tr scope="col">Update</tr>
        <tr scope="col">Delete</tr>
    </tr>
    </thead>
    <tbody>
    <?php while($rows = mysqli_fetch_assoc($result)): ?>
    <tr>
        <th scope="row"><?php echo $rows['id']?></th>
        <td><?php echo $rows['first_name']?></td>
        <td><?php echo $rows['last_name']?></td>
        <td><?php echo $rows['picture']?></td>
        <td><?php echo $rows['email']?></td>
        <td><?php echo $rows['date']?></td>
        <td><?php echo $rows['date']?></td>
        <td></td>
        <td></td>
    </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>
