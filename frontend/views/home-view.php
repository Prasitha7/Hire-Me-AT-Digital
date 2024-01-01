<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Inria Font-->
    <!--Poppins Font-->
    <!--Inter Font-->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&family=Inter&family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <!--Style Sheets-->
    <link rel="stylesheet" href="../styles/home-styles.css">
    <link rel="stylesheet" href="../styles/navbar-styles.css">
</head>
<body>

<!--Navigation Bar-->
<div class="topnav">
    <div class="topnav-home">
        <a class="home" href="home-view.php">AT Digital</a>
    </div>
    <div class="topnav-menu">
        
        <a href="#news">About</a>
        <a href="#portfolio0">Portfolio</a>
        <a href="#skills">Skills</a> 
        <a href="#contact">Contact</a>  
    </div>


    <!-- Add login and sign-in -->
    <div class="topnav-right">
        <a href="login-view.php">Login</a>
        <a href="signin-view.php">Sign In</a>
    </div>
</div>

<!--Background-->
<div class="sequence-container">
    <canvas class="at-main-sequence"></canvas>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../javascript/home-background.js"></script>    

<!--Website Start-->
<div class="scroll">
    <div class="hero">
        <h3>Hi</h3>
        <h1> AT Digital</h1>
        <h2>.io</h2>
        <h1> WEB DEVELOPMENT </h1>
    </div>
</div>

<!--Why Us -->
<div class="scroll" id="why-us">
    <ul>
        <li><h2>Why Choose AT Digital</h2></li>
        <li><h4>Unlimited Revisions</h4><br><br></li>
        <li><p>(Yes, you read it right 😉 We give unlimited revisions at the design stage.)</p><br><br></li>
        <li><h4>Zero Hosting Charges
</h4></li>
        <li><h4>Minimum Maintenance</h4></li>
        <li><h4>Easy To Manage</h4></li>
        <li><h4>Future Proof Technology</h4></li>
        <li><h4>Simple & Easy Process</h4></li>
    </ul>

    <!-- Add your content for the My Features section here -->
</div>

<!-- My Work Section -->
<div class="scroll" id="my-work">
    <h2>Things We Do</h2>
    <!-- Add your content for the My Work section here -->
</div>

<!-- Contact Me Section -->
<div class="scroll" id="contact-me">
    <h2>Contact Us Section</h2>
    <!-- Add your content for the Contact Me section here -->
</div>
  
</body>
</html>
