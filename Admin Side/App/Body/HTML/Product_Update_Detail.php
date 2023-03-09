<?php
    include("../../../Controler/Body_DB.php");
    // mysqli_query($conn,"UPDATE `kroma` SET  Title='$_POST[TITLE]',Price='$_POST[PRICE]',Size='$_POST[SIZE]',Qty='$_POST[QTY]' WHERE id=$id");
    $id = $_GET['id'];
    // $id = 11;
    /**
     * the value of other databse data
     */
    $Title      ='';
    $Price      ='';
    $Discount   ='';
    $Size       ='';
    $Image      ='';
    $Date       ='';
    $Qty        ='';
    /**
     * Take Value in database 
     */
    $res = mysqli_query($conn,"SELECT * FROM `kroma` WHERE ID = $id");
    while($row=mysqli_fetch_array($res))
    {
        
        $Title      =$row["TITLE"];
        $Qty        =$row["QTY"];
        $Price      =$row["PRICE"];
        $Discount   =$row["DISCOUNT"];
        $Size       =$row["SIZE"];
        $Date       =$row["DATE"];
        $Image      =$row["IMAGE"];
    }
    /**
     * final price 
     */
    $final_price = $Price-($Price*($Discount/100)); 
?>
<html>
<head>
    <link rel="stylesheet" href="../CSS/Product_Update_Detail.css">
</head>
<body>
    <div class="Main_Container">
        <div class="left_Card">
            <img src="../../../image/Body_Image/<?php echo $Image; ?> " alt="">
        </div>
        <div class="right_Card">
            <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                <ul>
                    <!-- id goes here -->
                    <li>
                        <input value="<?php echo $id; ?>" type="ID" name="id" class="field-style field-full align-left" placeholder="ID" readonly />
         
                    </li>
                    <!-- Title goes here -->
                    <li>
                        <input value="<?php echo $Title; ?>" name="Title" class="field-style field-full align-left" placeholder="Title" />
                
                    </li>
                    <!-- Qty goes here -->
                    <li>
                        <input value="<?php echo $Qty; ?>" type="Number" name="Qty" class="field-style field-full align-none" placeholder="Qty" />
                    </li>
                    <!-- Price goes here -->
                    <li>
                        <input value="<?php echo $Price; ?>" type="Number" name="Price" class="field-style field-full align-left" placeholder="Price" />
         
                    </li>
                    <!-- Discount goes here -->
                    <li>
                        <input value="<?php echo $Discount; ?>" name="Discount" class="field-style field-full align-left" placeholder="Discount" readonly />
         
                    </li>
                    <!-- Size goes here -->
                    <li>
                        <input value="<?php echo $Size ; ?>" name="Size" class="field-style field-full align-left" placeholder="Size" />
                    </li>
                    <!-- Date goes here -->
                    <li>
                        <input value="<?php echo $Date; ?>" name="Date" class="field-style field-full align-left" placeholder="Date" readonly />
                    </li>
                    <!-- final_price goes here -->
                    <li>
                        <input value="<?php echo $final_price; ?>" name="final_price" class="field-style field-full align-left" placeholder="Full price" />
                    </li>
                    <!-- image goes here -->
                    <li>
                        <input type="file" name="myImage" class="field-style field-full align-left" placeholder="image" />
                    </li>
                    <!-- button goes here -->
                    <li>
                        <a href="../../../Index/Admin_index.php" type="submit" name="btnGoback" id="btnGoback" class="btnGoback">Go Back</a>
                        <button type="Update" name="Update" id="Update" class="Update">Update</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
<?php
    if(isset($_POST["Update"]))
    {
        $tm=md5(time()); 
        $fnm = $_FILES["myImage"]["name"];
        $dst = "../image/Product_image/".$tm.$fnm;
        $dst1 = "../image/Product_image/".$tm.$fnm; 
        move_uploaded_file($_FILES["myImage"]["tmp_name"],$dst); 
        
        $getTitle = $_GET['Title'];
        $getQty = $_GET['Qty'];
        $getPrice = $_GET['Price'];
        $getDiscount = $_GET['Discount'];
        $getSize = $_GET['Size'];
        if( $fnm=="" )
        {
            if(!empty($_POST['Title']) && !empty($_POST['Price']) && !empty($_POST['Size']) && !empty($_POST['Qty']))
            {
                mysqli_query($conn,"UPDATE `kroma` SET  TITLE='$_POST[Title]', QTY='$_POST[Qty]', PRICE='$_POST[Price]', DISCOUNT='$_POST[Discount]', SIZE='$_POST[Size]' WHERE ID=$id ");
                header("Location: ../../../Index/Admin_index.php");
            }else
            {
                echo  "sex"; 
            }
        }else
        {
            // $dst = "../image/".$tm.$fnm;
            // $dst1 = "../image/".$tm.$fnm; 
            // move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
            // mysqli_query($conn,"UPDATE `kroma` SET  TITLE='$_POST[Title]',PRICE='$_POST[Price]',SIZE='$_POST[Size]',QTY='$_POST[Qty]' WHERE id=$id");
            // header("Location: ../../../Index/Admin_index.php");
        }
    }
?>

