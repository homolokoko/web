<?php
    include "../Controler/Body_DB.php";
    // mysqli_query($conn,"DELETE FROM `kroma` WHERE id=$userID");
    // header("Location: ../Index/Admin_index.php");
    $id = $_GET['id'];
    ?>
        <script>
            if (confirm("Press a button!") == true) 
            {
                <?php
                    mysqli_query($conn,"DELETE FROM `kroma` WHERE id=$id");
                    header("Location: ../Index/Admin_index.php");
                ?>
            } else 
            {
                <?php
                    header("Location: ../Index/Admin_index.php");
                ?>
            }
        </script>
    <?php
?>

  