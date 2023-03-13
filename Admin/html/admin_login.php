<?php
    include('../Controller/Body_DB.php');
?>
<head>
    <link rel="stylesheet" href="../css/admin_login.css">
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                    <img src="../image/Users_account/admin-icon-trendy-design-style-isolated-white-background-vector-simple-modern-flat-symbol-web-site-mobile-logo-app-135742404.jpg"
                                        style="width: 140px; height:100px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">WelCome back Admin</h4>
                                    </div>
                                    <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                                        <ul>
                                            <!-- Admin Account goes here -->
                                            <li>
                                                <span>Account</span> <input   name="admin_acc" class="field-style field-full align-left" placeholder="Admin" />
                                            </li>
                                            <!-- Admin Password goes here -->
                                            <li>
                                                <span>Password</span><input type="password" name="admin_pass" class="field-style field-full align-none" placeholder="Pass" />
                                            </li>
                                        </ul>
                                            <!-- button goes here -->
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <button type="submit" name="login" class="btn btn-outline-danger">Log in</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            <!-- left side goes here -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body><a href="./admin.php"></a>
<?php
    if(isset($_POST['login']))
    {
        $query = "SELECT * FROM `admin_acc` WHERE `admin_Name` = '$_POST[admin_acc]' AND `admin_pass` = '$_POST[admin_pass]'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['adminLoginID']=$_POST['admin_acc'];
            header('Location: ./admin.php');
            
        }else
        {
            echo "<script> alert('Worng')</script>";
        }
    };
?>