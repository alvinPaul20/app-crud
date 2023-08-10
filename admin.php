<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>Admin page!</h1>
    <a href="register.php">Register</a>

    <table border="1px" cellpadding="10px" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th colspan="2">Actions</th>
        </tr>
<?php
$query = "SELECT * FROM accounts";
$data = mysqli_query($conn,$query);
$result = mysqli_num_rows($data);

if($result){
     while($row = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td>
                <?php echo $row['user']; ?>
            </td>
            <td>
                <?php echo $row['password']; ?>
            </td>
            <td>
                <?php echo $row['email']; ?>
            </td>
            <td><a href='update.php?id=<?php echo $row['id'] ?>'>Edit</a></td>

            <td>
                <a onclick="return confirm('Are you certain, you want to delete this account?')" href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a>
            </td>
        </tr>
        <?php
     }
}
else{
    ?>
    <tr>
        <td>
            No Record Found!
        </td>
    </tr>
    <?php
}
?>

    </table>


</body>
</html>