<!DOCTYPE HTML>
<HTML lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <link rel = "icon" href = "../img/unlike.png" type = "image/x-icon">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>
<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="black" data-background-color="black" >
            <div class="logo"> 
                <a href="../Index.php" class="simple-text logo-normal">
                    <img src="../img/like.png" width="130" height="130">
                    <br>RAISE MY VOICE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="dashboard_admin.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="profile.php">
                            <i class="material-icons">person</i>
                            <p> User Complaint</p>
                        </a>
                    </li>
                    <li class="nav-item ">
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
                        <h5>Dashboard</h5>
					</div>
				</div>
			</nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <p class="card-category">Used Space</p>
                                <h3 class="card-title">0.1/8G</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">  
					                <a href="">Get More Storage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">store</i>
                                </div>
                                <p class="card-category">Complaints</p>
                                <h3 class="card-title">--</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category">Pending Issues</p>
                                <h3 class="card-title">--</h3>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">
                                    <div class="ct-chart" id="dailySalesChart">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Complaint solve rate</h4>
                                    <p class="card-category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 00% </span></p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-warning">
                                    <div class="ct-chart" id="websiteViewsChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Complaints Recieved</h4>
                                    <p class="card-category">Annual complaints</p>
                                </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-danger">
                                        <div class="ct-chart" id="completedTasksChart"></div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Complaints Pending</h4>
                                        <p class="card-category"> ! Solve soon</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>    
        <script src=""></script>
        <script src=""></script>
    </body>
</html>