<?php
    include_once"../../backend/connection.php";

    $sql = "DELETE FROM complaints WHERE user_id = '".$_GET["id"]."'";
    $query_run = mysqli_query($conn,$sql);

    if($query_run)
    {
        ?>
        <script>
            alert("Deleted Successfully");
            window.location.href='../tables.php';  
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Delete Failed");  
        </script>
        <?php
    }
?>