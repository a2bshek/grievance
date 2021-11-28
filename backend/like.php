<?php
    include("connection.php");

    $user_id=$_POST['user_id'];
    $query = "UPDATE complaints SET likes=likes + 1 WHERE user_id=$user_id";
    $res = mysqli_query($conn, $query);
?>