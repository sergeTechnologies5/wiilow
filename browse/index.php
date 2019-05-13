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
        include_once('../header.php')
  ?>
    <!-- end of nav -->

     <header class="masthead text-white text-center Restaurant">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <h1 class="home-search-text">Browse Rescurs</h1>
            <p class="home-search-subtext">Choose from your favorite Rescurs</p>
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
                <li class="active noclick"> 
                  <a href="http://localhost/willow/browse"> <i class="fa fa-coffee"></i> <span>Rescurs List</span> </a> 
                </li> 
              </ul>
              <!-- list start -->
              <ul id="tab"> 
                <li class="active">
                  <div class="result-merchant infinite-container" id="restuarant-list">
                    <div class="infinite-item">
                      <div class="inner">
                        <div class="row">
                          <div class="col-md-6 borderx">
                            <div class="row borderx" style="padding: 10px;padding-bottom:0;"> 
                              <div class="col-md-3 borderx ">
                                <a href="/menu-fullness-cafe"> 
                                  <img class="logo-small" src="../img/logo-hotel.jpg"> </a> 
                                  <div class="top10">
                                    <ul class="services-type">
                                      <li><p class="cod-text">Openning Hours</p><i class="fa fa-check"></i></li>
                                    </ul>
                                    <p class="cod-text">6:00AM</p> 
                                  </div> 
                                  <div class="top10"> 
                                  <ul class="services-type">
                                      <li><p class="cod-text">Closing Hours</p>  <i class="fa fa-close"></i></li>
                                    </ul>
                                    <p class="cod-text">6:00PM</p> 
                                  </div> 
                              </div>
                              <div class="col-md-9 borderx"> 
                                <div class="mytable"> 
                                  <div class="mycol"> 
                                    <div class="rating-stars" data-score="0" title="Not rated yet!">
                                      <img alt="1" src="../img/star-off.png" title="Not rated yet!">&nbsp;<img alt="2" src="../img/star-off.png" title="Not rated yet!">&nbsp;<img alt="3" src="../img/star-off.png" title="Not rated yet!">&nbsp;<img alt="4" src="../img/star-off.png" title="Not rated yet!">&nbsp;<img alt="5" src="../img/star-off.png" title="Not rated yet!">
                                      <input name="score" readonly="" type="hidden">
                                    </div> 
                                  </div> 
                                  <div class="mycol"> 
                                    <p>0 Reviews</p> 
                                  </div> 
                                  <div class="mycol"> 
                                    <span class="label label-success">Open</span> 
                                  </div> 
                                </div>
                                <h2>AA RESCURES</h2> 
                                <p class="merchant-address concat-text">
                                  Eastern Meru Kenya
                                </p> 
                                <p class="cuisine bold">aa@gmail.com 
                                </p> 
                                <p>Minimum Requests: 10</p> 
                                <p>Response Time: 45 MINUTES</p> 
                                <p> Response Distance: 30 </p> 
                                <a href="#" class="orange-button rounded3 medium bottom10 inline-block">  Review US    </a> 
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 with-padleft">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.09821734428!2d36.82384706681146!3d-1.3106058825168867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11a9d644a551%3A0xffc84960ca560e99!2sSouth+B%2C+Nairobi!5e0!3m2!1sen!2ske!4v1535477174187" width="543" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              
              <!-- list end -->
              
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
