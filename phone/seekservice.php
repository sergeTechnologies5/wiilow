
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Browse Rescurs</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

  <body>
<?php

    include_once("header.php");

    $service_no =  $_POST['service_no'];

    include_once("../config/config.php");
    $bdd = new db(); // create a new object, class db()
    //loans
    
    $query = "SELECT * FROM services WHERE service_no='$service_no'";
    $requests =$bdd->getOne($query);
    $id =$requests['service_id'];
    $service_id = $requests['id'];
    $query = "SELECT * FROM users WHERE id='$id'";
    $users =$bdd->getOne($query);
    $organisation_id = $users['id'];
    $client_id = $users['id'];

?>
	<header class="masthead text-white text-center Restaurant">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <h1 class="home-search-text"></h1>
            <p class="home-search-subtext"></p>
          </div>
        </div>
      </div>
    </header>
        

    <!-- Page Content -->
      <!-- /.row -->
      <div class="container-fluid section-grey">
        <div class="sections section-grey2 section-browse" id="section-browse"> 
            <div class="container">
              <div class="row">
                <div class="col-md-6"> 
                
                </div>
                <div class="col-md-6"> 
                  <div class="box-grey rounded top-line-green">
                    <div class="section-label bottom20"> 
                      <a class="section-label-a"> 
                        <i class="fa fa-user-plus"></i> <span class="bold" style="background:#fff;"> Send Request</span> <b></b> 
                      </a> 
                    </div>
                    <form enctype="multipart/form-data" id="forms" method="POST" action="send.php"> 
                      <div class="row top10">
                      <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="Request NO" required="required" value="" name="request_no" id="request_no" type="text"> 
                        </div>
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="Client Name" required="required" value="" name="client_name" id="username" type="text"> 
                        </div> 
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="TIME" required="required" value="" name="time" id="time" type="text"> 
                        </div> 
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <div class="intl-tel-input">
                            <input class="grey-fields mobile_inputs" placeholder="Client Mobile" required="required" value="" name="phonenumber" id="contact_phone" autocomplete="off" type="text">
                            <div class="flag-dropdown">
                              <div class="selected-flag" title="Kenya: +254">
                                <div class="iti-flag my"></div>
                                <div class="arrow"></div>
                              </div>
                              <ul class="country-list hide">
                                <li class="country preferred" data-dial-code="1" data-country-code="us">
                                  <div class="flag">
                                    <div class="iti-flag ke"></div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div> 
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="Location " required="required" id="location" onKeyPress= "getLocation();" name="location"  type="text"> 
                        </div> 
                      </div>
                     
                      <div class="row top10"> 

                      </div>
                      <p class="text-muted"> By sending a request, you agree to receive sms from vendor. </p>
                      <div class="row"> 
                      <input name="service_no" value="<?php echo $service_id;?>" hidden="true"/>
                      <input name="client_id" value="<?php echo $client_id;?>" hidden="true"/>
                      <input name="organisation_id" value="<?php echo $organisation_id;?>" hidden="true"/>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Add Logo</label>
                          <input name="log_url"  class="form-control" type="file">
                          <label></label>
                        </div>
									  </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input value="Send " name="submit" class="orange-button medium block full-width" type="submit"> 
                        </div> 
                      </div>
                    </form> 
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <!-- Portfolio Section -->
      <footer>   
          <?php
              include_once('../footer.php');
          ?>
      </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type = "text/javascript">
		
		function showLocation(position) {
		   var latitude = position.coords.latitude;
		   var longitude = position.coords.longitude;
		//    alert("Latitude : " + latitude + " Longitude: " + longitude);
		   document.getElementById("location").value = "latitude : " + latitude + ", longitude: " + longitude;
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
