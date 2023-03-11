<!DOCTYPE html>
<html lang="en">
<head>
    <!--Fonts and icons-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/material-dashboard.min.css">
    <!-- own css -->
    <link rel="stylesheet" href="../css/choose_type_product_insert.css">
</head>
<body>
    <?php 
        include('./headerNavbar.php');
        include("./bodySidebar.php");
    ?>
    <div class="Main_container">
        <h1>CHOOSE  PRODUCT TYPE TO INSERT</h1>
        <div class="contain_pro_types">
            <!-- kroma type -->
            <a href="./kroma_Insert_product.php">
                <div class="card productCard" style="width:20rem;">
                    <img src="../image/Body_Image/image1.jpeg" 
                        class="card-img-top"
                        alt="img">
                    <div class="card-body">
                        <h4>kroma product type</h4>
                        <p class="card-text">
                            Insert your kroma product here
                        </p>
                    </div>
                </div>
            </a>
            <!-- khourm type -->
            <a href="./khourm_Insert_product.php">
                <div class="card productCard" style="width:20rem;">
                    <img src="../image/Body_Image/image2.jpeg" 
                        class="card-img-top " alt="img">
                    <div class="card-body">
                        <h4>khorm product type</h4>
                        <p class="card-text">
                            Insert your khorm product here
                        </p>
                    </div>
                </div>
            </a>
            <!-- sot type -->
            <a href="">
                <div class="card productCard" style="width:20rem;">
                    <img src="../image/Body_Image/sot.jpg" 
                        class="card-img-top"
                        alt="img">
                    <div class="card-body">
                        <h4>sot product type</h4>
                        <p class="card-text">
                            Insert your sot product here
                        </p>
                    </div>
                </div>
            </a>
        </div>  
    </div>
</body>
</html>