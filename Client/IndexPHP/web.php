<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        <?php
            include 'sign-up/sign-up.css';
            include 'sign-in/sign-in.css';
            include 'forget-password/forget-password.css';
        ?>
        .signin-signup{
            margin:50px auto;
            width: auto;
            height: 900px;
            display:flex;
            /* flex-direction: column; */
            align-items: center;
            justify-content:space-between;
        }
    </style>
    
</head>
<body>
    <div class="signin-signup">
        <div class="frm-signin">
            <?php
                include 'sign-in/sign-in.php';
            ?>
        </div>
        <div class="frm-signup">
            <?php
                include 'sign-up/sign-up.php';
            ?>
        </div>
        <div class="frm-forget-password">
            <?php
                include 'forget-password/forget-password.php';
            ?>
        </div>
    </div>
    
</body>
</html>