<?php
    include("../Controler/Body_DB.php");
    /**
     * 
     */
    
?>
<head>
    <link rel="stylesheet" href="../App/Body/CSS/Product_table.css">
</head>
<body>
    <div class="main_container_table">
    <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Full price</th>
            <th>Size</th>
            <th>QTY</th>
            <th>Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $comm = "SELECT * FROM `kroma`";
            $result = mysqli_query($conn,$comm);

            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['ID'];
                $image = $row['IMAGE'];
                $title = $row['TITLE'];
                $date = $row['DATE'];
                $price = $row['PRICE'];
                $discount = $row['DISCOUNT'];
                $size = $row["SIZE"];
                $qty = $row["QTY"];
                $final_price = $price-($price*($discount/100));
                echo '
                    <tr>
                        <td> <span>'.$id.'</span> </td>
                        <td><img src="../image/Body_Image/'.$image.' " alt=""></td>
                        <td> <span> '.$title.' </span></td>
                        <td> <span>'.$price.'$</span> </td>
                        <td> <span class="my_dis" >'.$discount.'%</span> </td>
                        <td> <span>'.$final_price.'$ </span></td>
                        <td> <span>'.$size.'mn</span> </td>
                        <td> <span>'.$qty.'</span> </td>
                        <td> <span>'.$date.'</span> </td>
                        <td>
                            <a href="#" class="btnView">View</a>
                            <a href="../Controler/Body_Delete_method.php?id='.$id.' " onclick="return confirmDelete()" class="btnDelete">Delete</a>
                        </td>
                    </tr>
                    ' ;
            };
          ?>
        </tbody>
      </table>
    </div>
</body>
<script>
  function confirmDelete()
  {
    return confirm("Are you sure ? ");
  }
</script>
