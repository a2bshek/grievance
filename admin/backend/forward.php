<?php
    include "../../backend/connection.php";
    $id = $_POST['user_id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $setemail = $_POST['email'];
    $compto = $_POST['dep'];
    $msg = $_POST['complaint'];

    $to='teamraisemyvoice@gmail.com';
    $subject= $compto;
    $message="Complaint :"."\n\n".$msg;
    $headers="From: ".$setemail;
    if(mail($to, $subject, $message, $headers))
    {
        echo "<script>alert('Complaint forwarded Successful! Check email to proceed further $id ')</script>";
    }
    else
    {
        echo "Error while mailing";
    }
?>