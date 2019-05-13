<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panet kuching - Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <?php
        include_once('../header.php')
    ?>

     <header class="masthead text-white text-center Restaurant">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <h1 class="home-search-text">Login & Signup</h1>
            <p class="home-search-subtext">Sign up to start ordering</p>
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
                  <div class="box-grey rounded"> 
                    <div class="section-label bottom20"> 
                      <a class="section-label-a"> <i class="fa fa-user"></i> <span class="bold" style="background:#fff;"> Log in to your account</span> <b></b> </a> 
                    </div> 
                    <form action="login.php" id="forms" method="POST">
                        <a href="#" class="fb-button orange-button medium rounded"> 
                        <i class="fa fa-facebook"></i>  login with Facebook </a> <div class="top10">
                        </div> <a href="#" class="google-button orange-button medium rounded">
                        <i class="fa fa-google-plus"></i>  Sign in with Google </a> <div class="login-or"> 
                        <span>Or</span> </div> <div class="row top10"> <div class="col-md-12 "> 
                        <input class="grey-fields" placeholder="Mobile number or email" required="required" value="" name="email" id="username" type="text"> </div> </div> <!--row--> <div class="row top10"> 
                        <div class="col-md-12 "> 
                        <input class="grey-fields" placeholder="Password" required="required" value="" name="password" id="password" type="password"> </div> </div> <!--row-->
                          <div class="row top15"> <div class="col-md-6">
                          <a href="#" class="forgot-pass-link2 block orange-text text-center"> Forgot Password <i class="ion-help"></i> </a> </div>
                            <div class="col-md-6"> <input value="Login" class="green-button medium full-width" type="submit" name="login"> </div> 
                            </div> 
                    </form> 
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="box-grey rounded top-line-green">
                    <div class="section-label bottom20"> 
                      <a class="section-label-a"> 
                        <i class="fa fa-user-plus"></i> <span class="bold" style="background:#fff;"> Sign up</span> <b></b> 
                      </a> 
                    </div>
                    <form id="forms" method="POST" action="register.php"> 
                      <div class="row top10">
                      <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="Organization Title" required="required" value="" name="description" id="description" type="text"> 
                        </div>
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="First Name" required="required" value="" name="firstname" id="username" type="text"> 
                        </div> 
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="Last Name" required="required" value="" name="lastname" id="lastname" type="text"> 
                        </div> 
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <div class="intl-tel-input">
                            <input class="grey-fields mobile_inputs" placeholder="Mobile" required="required" value="" name="phonenumber" id="contact_phone" autocomplete="off" type="text">
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
                          <input class="grey-fields" placeholder="Email Address" required="required" value="" name="email" id="email" type="email"> 
                        </div> 
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input class="grey-fields" placeholder="Password" required="required" value="" name="password" id="password" type="password"> 
                        </div> 
                      </div>
                      <div class="row top10"> 

                      </div>
                      <p class="text-muted"> By creating an account, you agree to receive sms from vendor. </p>
                      <div class="row"> 
                    
                      </div>
                      <div class="row top10"> 
                        <div class="col-md-12 "> 
                          <input value="Create Account" name="submit" class="orange-button medium block full-width" type="submit"> 
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

  </body>

</html>
