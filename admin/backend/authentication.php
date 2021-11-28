<?php      
    $host = "sql207.epizy.com";  
    $user = "epiz_28433216";  
    $password = 'KwQXsYkBpEI'; 
    $db_name = "epiz_28433216_raisemyvoice";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) 
    {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select * from login where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);  
    if($count == 1)
    {
        echo "<h1><center> Login successful </center></h1>";
        header('Location: ../dashboard_admin.php');
    }  
    else
    {
        echo "<script>alert('Login failed. Invalid username or password')</script>";
        echo "<script>window.history.back()</script>";  
    }     
?>