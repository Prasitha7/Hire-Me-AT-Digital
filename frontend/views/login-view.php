<?php
    include("../../backend/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/login-styles.css">
    
    <title>Document</title>
</head>
<body>
    <!--Background-->
    <div class="sequence-container">
        <canvas class="at-sub-sequence"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../javascript/signin-background.js"></script> 
    <!--Login Form-->
    <div id="form">
        <h1>login Form</h1>
        <form name="LoginForm" action="login.php" onsubmit="return isvalid()" method="post">
            <label for="user">Username</label>
            <input type="text" id ="user" name="username" ><br><br>
            <label for="">Password</label>
            <input type="password" id="pass" name= "password"><br><br>
            <input type="submit" id=login value=login name=login>
        </form>
    </div>

    <script>
        function isvalid(){
            var username =document.LoginForm.username.value;
            var password =document.LoginForm.password.value;

            if(username.length==""){
                alert("Username field is empty")
            return false;
            }
            if(password.length==""){
                alert("password field is empty")
            return false;
            }    
        }
    </script>
</body>
</html>