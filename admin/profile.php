<!DOCTYPE HTML>
<HTML lang="en">
	<HEAD>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Profile</title>
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
                    <img src="../img/like.png" width="130" height="130"><br>Raise My Voice</a>
				</div>
				<div class="sidebar-wrapper">
					<ul class="nav">
						<li class="nav-item  ">
							<a class="nav-link" href="dashboard_admin.php">
								<i class="material-icons">dashboard</i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item active ">
							<a class="nav-link" href="profile.php">
								<i class="material-icons">person</i>
								<p>User Complaints</p>
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
							<h3>Administrator</h3><h5>User Complaints</h5>
						</div>
					</div>
				</nav>
				
                <div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8">
								<div class="card">
									<div class="card-header card-header-primary">
										<h4 class="card-title">Complaint</h4>
										<p class="card-category">Viewing Complaint</p>
										<div class="collapse navbar-collapse justify-content-end">
											
										</div>
									</div>
									<div class="card-body">
											<form class="navbar-form" method="GET">
											  <div class="input-group no-border">
												<input type="text" class="form-control" placeholder="ID Search" name="user_id" value="<?php if(isset($_GET['user_id'])){echo $_GET['user_id'];}?>">
												<button type="submit" class="btn btn-white btn-round btn-just-icon">
												  <i class="material-icons">search</i>
												  <div class="ripple-container"></div>
												</button>
											  </div>
											</form>
											<?php
												$con = mysqli_connect("sql207.epizy.com","epiz_28433216","KwQXsYkBpEI","epiz_28433216_raisemyvoice");
												if(isset($_GET['user_id']))
												{
													$user_id = $_GET['user_id'];
													$query = "SELECT * FROM complaints WHERE user_id='$user_id'";
													$query_run = mysqli_query($con,$query);
													if(mysqli_num_rows($query_run)>0)
													{
														foreach($query_run as $row)
														{
															?>
                                        	<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label class="bmd-label-floating">Complaint ID</label>
														<input type="number" name="user_id" class="form-control" value="<?=$row['user_id'];?>" disabled />
													</div>
												</div>
												<div class="col-md-7">
													<div class="form-group">
														<label class="bmd-label-floating">Date - Time</label>
														<input type="text" name="date" class="form-control" value="<?=$row['date'];?>" disabled />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label class="bmd-label-floating">First name</label>
														<input type="text" class="form-control" value="<?=$row['fname'];?>" disabled />
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label class="bmd-label-floating">Last name</label>
														<input type="text" class="form-control" value="<?=$row['lname'];?>" disabled />
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														<label class="bmd-label-floating">Show name</label>
														<input type="text" class="form-control" value="<?=$row['sname'];?>" disabled />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="bmd-label-floating">E-mail address</label>
														<input type="email" class="form-control" value="<?=$row['email'];?>" disabled />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="bmd-label-floating">Postal Code</label>
														<input type="number" class="form-control" value="<?=$row['zip'];?>" disabled />
													</div>
												</div>
											</div>
                                            <div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="bmd-label-floating">Complaint Department</label>
														<input type="email" class="form-control" value="<?=$row['dep'];?>" disabled />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="bmd-label-floating">Complaint</label>
														<textarea type="text" name="complaint" class="form-control" rows="8" cols="60" value="" disabled><?=$row['complaint'];?></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="bmd-label-floating">Proof</label><br>&emsp;&emsp;&emsp;&emsp;
														<?php
															echo'<img src="data:image;base64,'.base64_encode($row['proof']).'" alt="Proof" style="width:500px; height:300px">'
														?>
													</div>
												</div>
											</div>
                                            <a href="backend/forward.php?">
                                                <button class='btn btn-primary pull-right' style='background-color:green;color:black;' type="submit" value="forward">
                                                <b>Forward Complaint</b></button>
                                            </a>
                                            <a href="backend/delete.php?id=<?php echo $row['user_id'];?>">
                                                <button class="btn btn-secondary1 pull-right" value="delete" style="background-color:red;color:black;">
                                                <b>DELETE COMPLAINT!</b></button>
                                            </a>
                                        <?php
                                                }
                                            }
                                            else
                                            {
                                                echo "No Records Found";
                                            }
                                        }
                                        ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src=""></script>
	</BODY>
</HTML>