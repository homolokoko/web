<?php
    include("../../../Controler/Body_DB.php");
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Insert_product.css">
</head>
<body>
<div class="Main_Container">
        <div class="right_Card">
            <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                <ul>
                    <!-- Title goes here -->
                    <li>
                        <span>Title</span> <input  name="Title" class="field-style field-full align-left" placeholder="Title" />
                    </li>
                    <!-- Qty goes here -->
                    <li>
                        <span>Qty</span><input   name="Qty" class="field-style field-full align-none" placeholder="Qty" />
                    </li>
                    <!-- Price goes here -->
                    <li>
                        <span>Price</span><input name="Price" class="field-style field-full align-left" placeholder="Price" />
                    </li>
                    <!-- Discount goes here -->
                    <li>
                        <span>Discount</span> <input  name="Discount" class="field-style field-full align-left" placeholder="Discount" />
                    </li>
                    <!-- Size goes here -->
                    <li>
                        <span>Size</span><input name="Size" class="field-style field-full align-left" placeholder="Size" />
                    </li>
                    <!-- image goes here -->
                    <li>
                        <input type="file" name="myImage" class="field-style field-full align-left" placeholder="image" />
                    </li>
                    <!-- button goes here -->
                    <li>
                        <a href="../HTML/Product_table.php" type="submit" name="btnGoback" id="btnGoback" class="btnGoback">Go Back</a>
                        <button type="Insert" name="Insert" id="Insert" class="Insert">Insert</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
<a href="../../../image/Product_image/"></a>
</html>
<?php
    if(isset($_POST['Insert']))
    {
       
        $fnm = $_FILES["myImage"]["name"];
        $dst = "../image/Product_image/".$fnm;
        $dst1 = "../image/Product_image/".$fnm; 
        $date = date('Y-m-d');
        move_uploaded_file($_FILES["myImage"]["tmp_name"],$dst);
        mysqli_query($conn,"INSERT into `kroma` values(NULL,'$_POST[Title]','$_POST[Qty]','$_POST[Price]','$_POST[Discount]','$_POST[Size]','$date','$dst1')");
    }
?>