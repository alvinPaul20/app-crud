<?php
$conn = new mysqli("localhost","root","alvin","eproject","3307");
if($conn ->connect_error){
    die("Connection failed". $conn ->connect_error);
    
}
echo "Connection Successful";
?>