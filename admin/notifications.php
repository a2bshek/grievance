<!DOCTYPE HTML>
<HTML lang="en">
	<HEAD>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Notifications</title>
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
                    <br>Raise my voice</a>
				</div>
				<div class="sidebar-wrapper">
					<ul class="nav">
						<li class="nav-item  ">
							<a class="nav-link" href="dashboard_admin.php">
								<i class="material-icons">dashboard</i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="profile.php">
								<i class="material-icons">person</i>
								<p>User Complaint</p>
							</a>
						</li>
						<li class="nav-item ">
								<a class="nav-link" href="tables.php">
									<i class="material-icons">content_paste</i>
									<p>Table List</p>
								</a>
						</li>
						<li class="nav-item active ">
							<a class="nav-link" href="notifications.php">
								<i class="material-icons">notifications</i>
								<p>Notifications</p>
							</a>
						 </li>
          
					</ul>
				</div>
			</div>
			
			<div class="main-panel">
				<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
					<div class="container-fluid">
						<div class="navbar-wrapper">
							<h3>Administrator</h3><h5>Notifications</h5>
						</div>
					</div>
				</nav>
				<div class="content">
					<div class="container-fluid">
						<div class="card">
							<div class="card-header card-header-primary">
								<h3 class="card-title">Notifications</h3>
								<p class="card-category">First in First Out</p>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<h4 class="card-title">Dated:</h4>
										<div class="alert alert-info">
											<span>Notification 1</span>
										</div>
										<div class="alert alert-info">
											<span>Notification 2</span>
										</div>
										<div class="alert alert-info alert-with-icon" data-notify="container">
											<i class="material-icons" data-notify="icon">add_alert</i>
											<span data-notify="message">Notification 3</span>
										</div>
										<div class="alert alert-info alert-with-icon" data-notify="container">
											<i class="material-icons" data-notify="icon">add_alert</i>
											<span data-notify="message">Notification 4</span>
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="card-title">Notification state</h4>
										<div class="alert alert-info">
											<span>
											<b> New Complaint - </b> Complaint Notification</span>
										</div>
										<div class="alert alert-success">
											<span>
												<b> Solved - </b> Complaints resolved"</span>
										</div>
										<div class="alert alert-warning">
											<span>
												<b> Too Long - </b> Waiting for solution for long time</span>
										</div>
											<div class="alert alert-danger">
												<span>
													<b> Outdated - </b> Complaint waiting time exceeded</span>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
        <script src=""></script>
        <script src=""></script>
    </BODY>
</HTML>