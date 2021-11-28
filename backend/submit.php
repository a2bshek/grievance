<?php
    session_start();
    include 'connection.php';

    $captcha=$_POST['captcha'];
    if($_SESSION['CODE']==$captcha)
	{
		if (isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['dep']) && isset($_POST['complaint']) && isset($_POST['captcha']))
	    {
		    function validate($data)
		    {
	            $data = trim($data);
	            $data = stripslashes($data);
                $data = htmlspecialchars($data);
		        return $data;
		    }
            $fname = validate($_POST['fname']);
            $lname = validate($_POST['lname']);
            $sname = validate($_POST['sname']);
            $email = validate($_POST['email']);
            $zip = validate($_POST['zip']);
            $dep = validate($_POST['dep']);
            $complaint = validate($_POST['complaint']);

            $proof = addslashes(file_get_contents($_FILES["proof"]["tmp_name"]));      
		
		    $sql = "INSERT INTO complaints(fname, lname, sname, email, zip, dep, complaint, proof) VALUES('$fname', '$lname', '$sname', '$email', '$zip','$dep','$complaint', '$proof')";
		    $res = mysqli_query($conn, $sql);
		    if ($res) 
	        {
                echo "<script>alert('Your complaint filled successfully! You can upvote for the complaints Here!')</script>";
                header("Location: ../Viewcomp.php");
                exit;
		    }
		    else 
	        {
		        echo "<script>alert('Enter all details!')</script>";
		    }
        }
        else
        {
            echo"<script>alert('Failed! while submitting')</script>";
        }
    }
	else
	{
		echo "<script>alert('Please enter valid captcha code')</script>";
        echo "<script>window.history.back()</script>";
	}    
?>