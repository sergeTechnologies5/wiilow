<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Dashboard - Rescue Services</title>
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
			include_once("../config/config.php");
			$bdd = new db(); // create a new object, class db()
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
			//loans
				$requests = 'CREATE TABLE IF NOT EXISTS requests (
				id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
				request_no VARCHAR(1000) DEFAULT "",
				service_no INT NOT NULL,
				time  VARCHAR(1000) DEFAULT "",
				status INT,
				phonenumber  VARCHAR(1000) DEFAULT "",
				log_url  VARCHAR(1000) DEFAULT "",
				client_name  VARCHAR(1000) DEFAULT "",
				location  VARCHAR(1000) DEFAULT "",
				organisation_id INT NOT NULL,
				client_id INT NOT NULL,
                FOREIGN KEY (service_no) REFERENCES services(id) ON DELETE CASCADE,
				FOREIGN KEY (client_id) REFERENCES users(id) ON DELETE CASCADE,
				FOREIGN KEY (organisation_id) REFERENCES users(id) ON DELETE CASCADE,
				date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
				date_modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
				)';
			   
			 
				try {
					$response = $bdd->execute($requests);
				} catch (Exception $th) {
					echo $th->getMessage();
				}
			  
	?>
    <body>
        <div class="main-wrapper">
			<?php
				include_once('header.php');
			?>
            <div class="page-wrapper">
	            <div class="content container-fluid minet-content">
			            <div class="panel-heading">
			                <h4 class="page-title planet-cuthing">Agent Requests</h4>
			              </div>
		         		    <div class="panel-body packages">
			                    <div class="table-responsive">
									<?php
									$organisation_id = $_SESSION['id'];
									$query = "SELECT * FROM requests WHERE organisation_id='$organisation_id'";
									$requests =$bdd->getAll($query);
							
							?>
			                        <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
			                            <thead>
			                                <tr>
												<th>#</th>
			                                    <th>Request Number</th>
			                                    <th>Client Name</th>
		                                        <th>Time</th>
		                                        <th>Phone Number</th>
												<th>Location</th>
												<th>Image</th>
												<th>Decline</th>
												<th>Accept</th>
												<th>Delete</th>
			                                </tr>
										</thead>
										<tbody>
										<?php
										foreach ($requests as $value) {
                                        echo ' <tr>
                                        	<td>'.$value['id'].'</td>
                                        	<td>'.$value['request_no'].'</td>
                                        	<td>'.$value['client_name'].'</td>
											<td>'.$value['time'].'</td>
											<td>'.$value['phonenumber'].'</td>
											<td>'.$value['location'].'</td>
											<td><img style="width:40px;height:40px" class="logo-large" src="../useruploads/'.$value['log_url'].'"/></td>
											<td>'.'<a href="declinerequest.php/?id='.$value['id'].'"
											class="pull-right"><em class="fa fa-lg fa-close"></em></a>'.'</td>
											<td>'.'<a href="acceptrequest.php/?id='.$value['id'].'"
											class="pull-right"><em class="fa fa-lg fa-check"></em></a>'.'</td>
											<td>'.'<a class="btn btn-danger pull-right" href="deleterequest.php/?id='.$value['id'].'"
											class="pull-right">DELETE REQUEST</a>'.'</td>
										</tr>';
										}
                                        ?>
										</tbody>
			                        </table>
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