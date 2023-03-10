<?php
    include "./Body_DB.php";
    // mysqli_query($conn,"DELETE FROM `kroma` WHERE id=$userID");
    // header("Location: ../Index/Admin_index.php");
    $id = $_GET['id'];
    ?>
        <script>
            if (confirm("Are you sure ?") == true) 
            {
                <?php
                    mysqli_query($conn,"DELETE FROM `kroma` WHERE id=$id");
                    header("Location: ../mytesthtml/kroma_Product_table.php");
                ?>
            } else 
            {
                <?php
                    header("Location: ../mytesthtml/kroma_Product_table.php");
                ?>
            }
        </script>
    <?php
?>

  