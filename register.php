<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trojan Shop</title>
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">


</head>
<body>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
    <defs>
        <linearGradient id="bg">
            <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
            <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
            <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
        </linearGradient>
        <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
    </defs>
    <g>
        <use xlink:href='#wave' opacity=".3">
            <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="translate"
      dur="10s"
      calcMode="spline"
      values="270 230; -334 180; 270 230"
      keyTimes="0; .5; 1"
      keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
      repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacity=".6">
            <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="translate"
      dur="8s"
      calcMode="spline"
      values="-270 230;243 220;-270 230"
      keyTimes="0; .6; 1"
      keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
      repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacty=".9">
            <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="translate"
      dur="6s"
      calcMode="spline"
      values="0 230;-140 200;0 230"
      keyTimes="0; .4; 1"
      keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
      repeatCount="indefinite" />
        </use>
    </g>
</svg>
    <div id="form">
<div class="head">
<h1>Sign Up Form</h1>
</div>
<form method="POST" name="form" autocomplete="off">
<div class="box">     
<label for="" class="label">Username:</label>
    <input type="text" name="user" id="user"  required value="">
</div>
  
  <div class="box">
  <label for="" class="label">Email address:</label>
    <input type="text" id="email" name="email"  required value="">
  </div>

  <div class="box">
  <label for="" class="label">Password:</label>
    <input type="password" id="password" name="password"  required value="">
  </div>
   <div class="btn">
   <button id="submit" name="submit">Submit</button>
   
   </div>
</form>
    </div>
    <?php 
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO accounts(user,email,password) VALUES('$user','$email','$password')";
        $data =  mysqli_query($conn,$query);
        if($data){
            
            echo '<script>
            window.location.href = "welcome.php";
            alert("Registered succesfully");
            </script>';
        }else{  
            echo '<script>
            alert("Please try again");
            </script>';
        }
    }
    ?>
</body>
</html>