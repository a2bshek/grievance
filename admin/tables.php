<?php
    include "../backend/connection.php";
    $query="SELECT * from complaints";
    $result=mysqli_query($query);
?>
<!DOCTYPE HTML>
    <HTML lang="en">
        <HEAD>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <title>Complaints Table</title>
            <link rel = "icon" href = "../img/unlike.png" type = "image/x-icon">
            <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
            
            <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
            <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        </HEAD>
        
        <BODY class="">
            <div class="wrapper ">
                <div class="sidebar" data-color="black" data-background-color="black" >
	                <div class="logo">
                        <a href="../Index.php" class="simple-text logo-normal">
                        <img src="../img/like.png" width="130" height="130">
                        <br>RAISE MY VOICE</a>
                    </div>
                    <div class="sidebar-wrapper">
                        <ul class="nav">
                            <li class="nav-item  ">
                                <a class="nav-link" href="dashboard_admin.php">
                                    <i class="material-icons">dashboard</i><p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="profile.php">
                                    <i class="material-icons">person</i><p>User Complaints</p>
                                </a>
                            </li>
                            <li class="nav-item active ">
                                <a class="nav-link" href="tables.php">
                                    <i class="material-icons">content_paste</i>
                                    <p>Table List</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-panel">
      
                    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
					    <div class="container-fluid">
						    <div class="navbar-wrapper">
							    <h3>Administrator</h3>
    							<h5>Table List</h5>
	    					</div>
		    			</div>
			    	</nav>

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <h4 class="card-title ">Complaints List</h4>
                                            <p class="card-category"></p>
                                        </div>
                                    <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>Complaint Time</th>
                                            <th>Full Name</th>
                                            <th>email</th>
                                            <th>Complaint To</th>
                                            <th>Zipcode</th>
                                            <th>Priority!</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $con = mysqli_connect("sql207.epizy.com","epiz_28433216","KwQXsYkBpEI","epiz_28433216_raisemyvoice");
                                            $query = "SELECT * FROM complaints";
                                            $query_run = mysqli_query($con,$query);
                                            if(mysqli_num_rows($query_run)>0)
                                            {
                                                foreach($query_run as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?= $row['user_id'];?></td>
                                                        <td><?= $row['date'];?></td>
                                                        <td><?= $row['fname'];?> <?= $row['lname'];?></td>
                                                        <td><?= $row['email'];?></td>
                                                        <td><?= $row['dep'];?></td>
                                                        <td><?= $row['zip'];?></td>
                                                        <td><?= $row['likes'];?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td colspan="6">No records Found</td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
            <script src=""></script>
        </BODY>
    </HTML>