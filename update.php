<?php
include "connection.php";
$id = $_GET['id'];
$select = "SELECT * FROM accounts WHERE id='$id' ";
$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
?>
<style>
.container form input{
display:block;
margin:20px 0px;
}
.container{
    border:2px solid black;
    width:50%;
    padding:30px;
}
</style>
<div class="container">
    <h2>Update Form</h2>
<form action="" method="POST">
<input type="text" name="username" value="<?php echo $row['user'] ?>">
<input type="text"  name="password" value="<?php echo $row['password'] ?>">
<input type="text"  name="email" value="<?php echo $row['email'] ?>">
<input type="submit" name="update_btn">
<button><a href="admin.php">Back</a></button>

</form>
</div>

<?php 
    if(isset($_POST['update_btn'])){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $update ="UPDATE accounts SET user ='$user', password ='$password', email='$email' WHERE id = '$id' ";
        $data =  mysqli_query($conn,$update);
        if($data){
            
            echo '<script>
            window.location.href = "admin.php";
            alert("Account Updated succesfully");
            </script>';
        }else{  
            echo '<script>
            alert("Please try again");
            </script>';
        }
    }
    ?>