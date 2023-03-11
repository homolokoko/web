<?php
    include("../DB/Body_DB.php");
?>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
    <link rel="stylesheet" href="../CSS/sign-up.css">
</head>
<body>
    <form action="" class="frm_sign-up">

        <div class="image">
        <img src="../image/Body_Image/image1.jpeg" alt="">
        </div>
        <div class="sign_up">
            <div class="title">
                <h3>GET STARTED</h3>
                <p style="font-size:10pt;">Already have an account?<a href="./sign-in.php" style="color:black;font-weight:500;text-decoration:none;">Sing in</a></p>
            </div>
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" id="signin" value="Sign Up">
        </div>
        
        
    </form>
</body>
</html>