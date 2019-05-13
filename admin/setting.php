<!DOCTYPE html>
<html>
	 
    <head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
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
								$settings = 'CREATE TABLE IF NOT EXISTS settings (
									id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
									location VARCHAR(1000) DEFAULT "",
									map_url VARCHAR(1000) DEFAULT "",
									opening_hours  VARCHAR(1000) DEFAULT "",
									closing_hours  VARCHAR(1000) DEFAULT "",
									log_url VARCHAR(6000) DEFAULT "",
									avg_response_time INT,
									avg_response_requests INT,
									avg_response_distance INT,
									terms_and_conditions  VARCHAR(8000) DEFAULT "",
									settings_id INT NOT NULL,
									FOREIGN KEY (settings_id) REFERENCES users(id) ON DELETE CASCADE,
									date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
									date_modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
									)';
									 
									try {
										$response = $bdd->execute($settings);
										$settings_id = $_SESSION['id'];
										$selectsettings="SELECT * FROM settings where settings_id='$settings_id'";
										$query = "SELECT * FROM settings WHERE organisation_id='$settings_id'";
										$requests =$bdd->getAll($selectsettings);
										if(count($requests)<=0){
											$query = "INSERT INTO `settings` (`id`, `location`, `map_url`, `opening_hours`, `closing_hours`, `log_url`, `avg_response_time`, `avg_response_requests`, `avg_response_distance`, `terms_and_conditions`, `settings_id`, `date_created`, `date_modified`) VALUES (NULL, 'ss', 'ss', 'ss', 'sss', 'sss', '1', '1', '1', '1', '$settings_id', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
											$response = $bdd->execute($query);
										}
										
									} catch (Exception $th) {
										echo $th->getMessage();
									}
									$settings_id = $_SESSION['id'];
									$selectsettings="SELECT * FROM settings where settings_id='$settings_id'";
            						$settingsresult = $bdd->getOne($selectsettings); 
						?>
				
							
            <div class="page-wrapper">
			<style>
				/* Always set the map height explicitly to define the size of the div
				* element that contains the map. */
				#map {
					height: 100%;
				}
				/* Optional: Makes the sample page fill the window. */
				html, body {
					height: 100%;
					margin: 0;
					padding: 0;
				}
				</style>
                <div class="content container-fluid minet-content">
		            <div class="planet-kutching">
		                <h4 class="page-title planet-cuthing planet-kutching">Settings</h4>
		            </div>
	         		<div class="row">
						<div class="col-md-12">
							<form enctype="multipart/form-data" action="updatesettings.php" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Location</label>
											<input name="location" value="<?php echo $settingsresult['location']?>" class="form-control" value="" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Logo</label>
											<input name="log_url"  class="form-control" type="file">
											<label><?php echo $settingsresult['log_url']?></label>
										</div>
									</div>
								</div>
								<div class="row">
									<h3 class="open-planet-header">Fill Terms</h3>
										<div class="col-md-3">
											<div class="form-group">
												<label>Opening</label>
												<input name="opening_hours" value="<?php echo $settingsresult['opening_hours']?>"  class="form-control planet-fields" value="" type="text" placeholder="8:00AM">
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Closing</label>
												<input name="closing_hours" value="<?php echo $settingsresult['closing_hours']?>" class="form-control planet-fields" value="" type="text" placeholder="5:00PM">
												
											</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
											<label>Average Requests</label>
											<input name="avg_response_requests" value="<?php echo $settingsresult['avg_response_requests']?>" class="form-control" value="" type="text">
										</div>
									</div>
										<div class="col-md-3">
										<div class="form-group">
											<label>Average Response Time</label>
											<input name="avg_response_time" value="<?php echo $settingsresult['avg_response_time']?>" class="form-control" value="" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Average Response Distance</label>
											<input name="avg_response_distance" value="<?php echo $settingsresult['avg_response_distance']?>" class="form-control" value="" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Map</label>
											<input id="map_url" onKeyPress= "getLocation();" name="map_url" value="<?php echo $settingsresult['map_url']?>" class="form-control" value="" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label>Add Terms and Conditions</label>
									<textarea name="terms_and_conditions"  rows="4" cols="5" class="form-control" placeholder="Enter your message here"><?php echo $settingsresult['terms_and_conditions']?></textarea>
									<div class="m-t-20 text-center">
									<button name="submit" class="btn btn-primary planet-button">Save Changes</button>
								</div>
								</div>
								</div>
								<div class="col-md-6">
										<div id="map" class="form-group">
											<a  class="btn btn-primary planet-button" target="_blank" href="viewcurentlocation.php">Current Location</a>
										</div>
										
									</div>
								
								
							</form>
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
		
		<script type = "text/javascript">
		
		function showLocation(position) {
		   var latitude = position.coords.latitude;
		   var longitude = position.coords.longitude;
		//    alert("Latitude : " + latitude + " Longitude: " + longitude);
		   document.getElementById("map_url").value = "latitude : " + latitude + ", longitude: " + longitude;
		}

		function errorHandler(err) {
		   if(err.code == 1) {
			  alert("Error: Access is denied!");
		   } else if( err.code == 2) {
			  alert("Error: Position is unavailable!");
		   }
		}
		   
		function getLocation() {

		   if(navigator.geolocation) {
			  
			  // timeout at 60000 milliseconds (60 seconds)
			  var options = {timeout:60000};
			  navigator.geolocation.getCurrentPosition(showLocation, errorHandler, options);
		   } else {
			  alert("Sorry, browser does not support geolocation!");
		   }
		}
		   
	 </script>

    </body>
</html>