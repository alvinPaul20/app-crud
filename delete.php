<?php
include "connection.php";
$id = $_GET['id'];
$query = "DELETE FROM accounts WHERE id = '$id' ";
$data = mysqli_query($conn,$query);
if($data){
            
    echo '<script>
    window.location.href = "admin.php";
    alert("Account Deleted succesfully");
    
    </script>';
}else{  
    echo '<script>
    alert("Please try again");
    </script>';
}
?>
