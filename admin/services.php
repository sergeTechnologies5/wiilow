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
    <body>
        <div class="main-wrapper">
						<?php
								include_once('header.php');
								include_once("../config/config.php");
								$bdd = new db(); // create a new object, class db()
								
								//loans
								$requests = 'CREATE TABLE IF NOT EXISTS services (
									id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
									service_no VARCHAR(1000) DEFAULT "",
									title VARCHAR(1000) DEFAULT "",
									response_time  VARCHAR(1000) DEFAULT "",
									fee INT,
									description  VARCHAR(1000) DEFAULT "",
									service_id INT NOT NULL,
									FOREIGN KEY (service_id) REFERENCES users(id) ON DELETE CASCADE,
									date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
									date_modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
									)';
									 
								 
									try {
										$response = $bdd->execute($requests);
									} catch (Exception $th) {
										echo $th->getMessage();
									}
						?>
							
            <div class="page-wrapper">
                <div class="content container-fluid minet-content">
					<div class="row">
						<div class="col-sm-4 col-xs-3">
							<h4 class="page-title planet-cuthing">Service Category</h4>
						</div>
						<div class="pull-right messages-buttons">
			               <a href="createservice.php" class="btn btn-primary button plannet-modal">Create Service</a>
			            </div>
					</div>
					<div class="row staff-grid-row">
					<?php
									$organisation_id = $_SESSION['id'];
									$query = "SELECT * FROM services WHERE service_id='$organisation_id'";
									$requests =$bdd->getAll($query);
									foreach ($requests as  $value) {
										echo '
						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
							 <a href="deleteservice.php/?id='.$value['id'].'"
					class="pull-right"><em class="fa fa-lg fa-close"></em></a>
								<div class="profile-img">
									<a href="servicedescription.php" class="avatar">service</a>
								</div>
							<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#">Service Title : '.$value['title'].'</a></h4>
										<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#">Service NO : '.$value['service_no'].'</a></h5>
										<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#">PRICE: '.$value['fee'].'</span></a></h5>
										<a href="servicedescription.php?id='.$value['id'].'" class="btn btn-default btn-sm m-t-10 planet-button">View Service</a>
								
							</div>
						</div>';
					}
				?>
						
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
		<script>
			
		</script>
    </body>
</html>