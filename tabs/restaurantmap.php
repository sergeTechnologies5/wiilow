<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Browse Restaurant</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img style=" max-width: 100%; height: auto;" src="../img/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/planetkutching">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/planetkutching/browse">Browse Restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/planetkutching/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/planetkutching/signup">Login & Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <header class="masthead text-white text-center Restaurant">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <h1 class="home-search-text">Browse Restaurant</h1>
            <p class="home-search-subtext">Choose from your favorite restaurant</p>
          </div>
        </div>
      </div>
    </header>
        

    <!-- Page Content -->
      <!-- /.row -->
      <div class="container-fluid section-grey">
        <div class="sections section-grey2 section-browse" id="section-browse"> 
          <div class="container"> 
            <div class="tabs-wrapper"> 
              <ul id="tabs"> 
                <li class="noclick"> 
                  <a href="http://localhost/planetkutching/browse"> <i class="fa fa-coffee"></i> <span>Restaurant List</span> </a> 
                </li> 
                <li class=" noclick"> 
                  <a href="http://localhost/planetkutching/tabs/newest.php"> <i class="fa fa-cutlery"></i> <span>Newest</span> </a> 
                </li> 
                <li class="noclick"> 
                  <a href="http://localhost/planetkutching/tabs/featured.php"> <i class="fa fa-spoon"></i> <span>Featured</span> </a> 
                </li> 
                <li class="active noclick"> 
                  <a href="http://localhost/planetkutching/tabs/restaurantmap.php"> <i class="fa fa-globe"></i> <span>View Restaurant by map</span> </a>
                </li>
              </ul>
              <ul id="tab"> 
                <li class="active">
                  <div class="result-merchant infinite-container" id="restuarant-list">
                    <div class="infinite-item">
                      <div class="inner">
                        <div class="row">
                          <div class="col-md-12 with-padleft">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.09821734428!2d36.82384706681146!3d-1.3106058825168867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11a9d644a551%3A0xffc84960ca560e99!2sSouth+B%2C+Nairobi!5e0!3m2!1sen!2ske!4v1535477174187" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Portfolio Section -->
      <footer>
          <form method="POST" id="frm-subscribe" class="frm-subscribe has-validation-callback" onsubmit="return false;"><input value="subscribeNewsletter" name="action" id="action" type="hidden">
            <div class="sections section-subcribe"> 
              <div class="container"> 
                <h2 class="subscribe Newsletter-header">Subscribe to our newsletter</h2> 
                <div class="subscribe-footer"> 
                  <div class="row"> 
                    <div class="col-md-4"></div>
                    <div> 
                      <input placeholder="E-mail" required="required" class="email" value="" name="subscriber_email" id="subscriber_email" type="text"> 
                    </div> 
                    <div> 
                      <button class="green-button rounded"> Subscribe </button> 
                    </div> 
                  </div> 
                </div>
              </div> 
            </div> <!--section-browse-resto-->
          </form>
          <div class="sections section-footer"> 
            <div class="container"> 
              <div class="row"> 
                <div class="col-md-4 "> 
                  <p>
                    P11-2-3C Chong Lin Park, Jalan Tabuan, Kuching 93200, Sarawak Malaysia<br>Call Us +60 10-936 1858 or +60 16-572 3755 <br>info@planetkuching.com
                  </p> 
                </div>
                <div class="col-md-3 border"> 
                  <h3>Menu</h3> 
                  <li> 
                    <a href="http://localhost/planetkutching/aboutus" target="_blank"> About Us</a> 
                  </li> 
                </div>
                <div class="col-md-3 border"> 
                  <h3>Others</h3> 
                  <li> 
                    <a href="#" target="_blank"> Recommedation</a> 
                  </li>
                  <li> 
                    <a href="#" target="_blank"> Privacy Policy</a> 
                  </li> 
                  <li> 
                    <a href="#"> Terms and Conditions</a> 
                  </li> 
                </div>
                <div class="col-md-2 border"> 
                  <h3>Connect with us</h3> 
                  <div class="mytable social-wrap"> 
                    <div class="mycol border"> 
                      <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a> 
                    </div>
                    <div class="mycol border"> 
                      <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> 
                    </div>
                    <div class="mycol border"> 
                      <a target="_blank" href="#"><i class="fa fa-instagram"></i></a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
