<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Dashboard - Planet Kutching Delivery Services</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/plugins/morris/morris.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<?php
		// 
	?>
    <body>
        <div class="main-wrapper">
			<?php
				include_once('header.php');

				$service_id = $_SESSION['id'];
				include_once("../config/config.php");
				$bdd = new db(); // create a new object, class db()
				if(isset($_POST['title'])&&isset($_POST['description'])&&isset($_POST['fee'])
				&&isset($_POST['response_time'])&&isset($_POST['service_no'])&&isset($_POST['submit'])){
					$title = $_POST['title'];
					$description = $_POST['description'];
					$fee = $_POST['fee'];
					$response_time = $_POST['response_time'];
					$service_no = $_POST['service_no'];
					$service_id = $_SESSION['id'];
// INSERT INTO `services` (`id`, `service_no`, `response_time`, `fee`, `description`, `service_id`, `date_created`, `date_modified`, `title`) VALUES (NULL, 'rtyu', 'ASDA', '78', '3456XCX', '8', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'SADSFDGH');
					$query ="INSERT INTO `services` (`id`, `service_no`, `response_time`, `fee`, `description`, `service_id`, `date_created`, `date_modified`, `title`) VALUES (NULL, '$service_no', '$response_time', '$fee', '$description', '$service_id', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP,'$title');";
					try {
            
						$response = $bdd->execute($query);	
						if($response ==1){
							header('location:/willow/admin/services.php');	
						}else{
							header('location:/willow/admin/createservice.php');
						}
					} catch (Exception $e) {
						echo"The error is : ",$e->getMessage();
					}  
				}
			?>
            <div class="page-wrapper">
                <div class="content container-fluid minet-content">
		            <div class="planet-kutching">
					
		                <h4 class="page-title planet-cuthing planet-kutching">Service Details</h4>
		            </div>
		            <div class="card-box m-b-0 planet-section">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href=""><img class="avatar" src="assets/img/user.jpg" alt=""></a>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-12">
												<form action="createservice.php" method="POST">
													<div class="row">
													<div class="col-md-3">
															<div class="form-group">
																<label>Service Name</label>
																<input name="title" class="form-control" value="" type="text">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Service NO</label>
																<input name="service_no"  class="form-control" value="" type="text">
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label>Fee</label>
																<input name="fee" class="form-control" value="" type="text">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Response Time</label>
																<input name="response_time" class="form-control" value="" type="text">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>Description</label>
																<textarea rows="4" cols="5" name="description" class="form-control" placeholder="Enter Description"></textarea>
														
															</div>
														</div>
														
													</div>

													<div class="m-t-20 text-center">
														<button name="submit" class="btn btn-primary planet-button">Create Service</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/plugins/morris/morris.min.js"></script>
		<script type="text/javascript" src="assets/plugins/raphael/raphael-min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>
</html>