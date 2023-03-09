<?php
    include("../../../Controler/Body_DB.php");
    $id = $_GET['id'];
    $Title      ='';
    $Price      ='';
    $Discount   ='';
    $Siz        ='';
    $Image      ='';
    $Date       ='';
    $Qty        ='';
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
    $final_price = $Price-($Price*($Discount/100)); 
?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/Product_Update_Detail.css">
    </head>
    <body>
        
        <div class="Main_Container">
            <div class="left_Card">
                <img src="../../<?php echo $Image; ?> " alt="">
            </div>
            <div class="right_Card">
                <form class="form-style-9" action="" method="post" name="form1" enctype="multipart/form-data">
                    <ul>
                        <!-- id goes here -->
                        <li>
                            <span>id</span>  <input value="<?php echo $id; ?>" type="ID" name="id" class="field-style field-full align-left" placeholder="ID" readonly />
                        </li>
                        <!-- Title goes here -->
                        <li>
                            <span>Title</span> <input value="<?php echo $Title; ?>" name="Title" class="field-style field-full align-left" placeholder="Title" />
                        </li>
                        <!-- Qty goes here -->
                        <li>
                            <span>Qty</span><input value="<?php echo $Qty; ?>"  name="Qty" class="field-style field-full align-none" placeholder="Qty" />
                        </li>
                        <!-- Price goes here -->
                        <li>
                            <span>Price</span><input value="<?php echo $Price; ?>$"  name="Price" class="field-style field-full align-left" placeholder="Price" />
                        </li>
                        <!-- Discount goes here -->
                        <li>
                            <span>Discount</span> <input value="<?php echo $Discount; ?>%" name="Discount" class="field-style field-full align-left" placeholder="Discount" />
                        </li>
                        <!-- Size goes here -->
                        <li>
                            <span>Size</span><input value="<?php echo $Size ; ?>" name="Size" class="field-style field-full align-left" placeholder="Size" />
                        </li>
                        <!-- Date goes here -->
                        <li>
                            <span>Date</span><input value="<?php echo $Date; ?>" name="Date" class="field-style field-full align-left" placeholder="Date" readonly />
                        </li>
                        <!-- final_price goes here -->
                        <li>
                            <span>final_price</span><input value="<?php echo $final_price; ?>$" name="final_price" class="field-style field-full align-left" placeholder="Full price" readonly />
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
  <a href="../../../image/Product_image/"></a>
  <img src="../../../image/Product_image/" alt="">
</html>  
    <?php
        if(isset($_POST['Update']))
        {
            $fnm = $_FILES["myImage"]["name"];
            if($fnm=="")
            {
                if(!empty($_POST['Title']) && !empty($_POST['Price']) && !empty($_POST['Size']) && !empty($_POST['Qty']))
                {
                    mysqli_query($conn,"UPDATE `kroma` SET  TITLE='$_POST[Title]', QTY='$_POST[Qty]', PRICE='$_POST[Price]', DISCOUNT='$_POST[Discount]', SIZE='$_POST[Size]' WHERE ID=$id ");
                    header("Location: ../../../Index/Admin_index.php");
                }else
                {
                    ?>
                        <script>
                            alert("You must complete the form");
                        </script>
                    <?php
                }
             }//else
            // {
            //     $dst = "../image/Product_image/".$fnm;
            //     $dst1 = "../image/Product_image/".$fnm; 
            //     move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
            //     mysqli_query($conn,"UPDATE `kroma` SET  TITLE='$_POST[Title]', QTY='$_POST[Qty]', PRICE='$_POST[Price]', DISCOUNT='$_POST[Discount]', SIZE='$_POST[Size]',IMAGE='$dst1' WHERE ID=$id ");
            //     header("Location: ../../../Index/Admin_index.php");
            // }
        }
    ?>