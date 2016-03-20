<!DOCTYPE html>
<html>
  <head>
    <title>Details</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/style.css">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;

      }
    </style>
  </head>
  <body>
    
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 24.9000, lng: 91.8667},
          zoom: 17
        });
        var marker = new google.maps.Marker({
        position: {lat: 24.9000, lng: 91.8667},
        map: map,
        title: 'Popular Diagonostic Center, Sylhet'
  });


      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoiMFHdVydSX5L2lk2wISOn5bRg4hKiqc&callback=initMap"
    async defer></script>



    <div id="search_result-page">

            <!-- site-navigation start -->
            <nav id="mainNavigation" class="navbar navbar-fixed-top navbar-dafault main-navigation" role="navigation">
                <div class="container">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- navbar logo -->
                        <a href="index.html" class="navbar-brand">
                            <span><i class="fa fa-stethoscope"></i>Medical</span>
                        </a>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li class="active">
                                <a href="index.html"><span>home</span></a>
                            </li>

                            <li>
                                <a href="about.html"><span>about us</span></a>
                            </li>

                            <li>
                                <a href="doctors.html"><span>our doctors</span></a>
                            </li>

                            <li>
                                <a href="appointment.html"><span>appointment</span></a>
                            </li>

                            <li>
                                <a href="faq.html"><span>faq</span></a>
                            </li>

                            <li>
                                <a href="contact.html"><span>contact</span></a>
                            </li>
                        </ul>
                    </div><!-- nav links -->

                </div><!-- /.container -->
            </nav>
            <!-- site-navigation end -->




            <!-- header begin -->
            <header class="container-fluid page-head">

                <div class="header-wrapper">
                    <div class="welcome-speech">
                        <small>Healthy body = Healthy mind = Happy you</small>
                        <h1>Welcome to our Medical Search</h1>
                    </div> <!-- /.welcome-sppech -->
                </div> <!-- /.header-wrapper -->

            </header> <!-- /.page-head  -->
            <!-- header end -->
            <section class="search-result" style="margin-left:60px">
               <!--search results  -->
               <h3>Popular Diagonostic center,sylhet</h3>
               <h4>Location : Medical road,Sylhet<br>Test Category : Blood test<br>Price : 500</h4>
               <hr>
               <div style="margin-right:50px"><p>El paràgraf és una unitat narrativa, una divisió del text. L'estudia la gramàtica del discurs. Cada paràgraf té un contingut únic i està separat gràficament dels altres.

La separació gràfica pot quedar indicada per un punt i a part (també denominat punt i a cap) o per altres puntuacions indicatives de pausa major que n'impliquen la seva absència (punt d'abreviatura, punts suspensius, signe d'interrogació o signe d'admiració).[1] Igualment el delimita un punt final. En tipografia es pot marcar com ¶ o §. El símbol § neix de la unió de dues S (de "secció") i es pot crear amb la combinació de tecles Alt + 0167.[nota 1]

Segons la posició i funció, pot haver-hi paràgrafs d'introducció, de conclusió, d'explicació, de descripció… Entre ells es coordinen mitjançant paraules d'enllaç o nexes discursius. El paràgraf estructura el text; per això se sol buscar la idea central de cadascun per fer resums. Constitueix l'eix de l'ensenyament de la redacció.</p></div>
            <hr>
               <div id="map" style="width:400px;height:400px;margin-left : 30%"></div>
              
            </section>



            <footer>
                <div class="container">
                    <div class="row">

                        <!-- useful links -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Useful Links</h4>
                            <ul class="row footer-links">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Services</a></li>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="#">Organization</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Media</a></li>
                                    <li><a href="#">24/7</a></li>
                                    <li><a href="#">Right Way</a></li>
                                </div>
                            </ul>
                        </div>

                        <!-- recent news -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Recent News</h4>

                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 1">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="#">
                                                a clear website gives more experience to the visitors
                                            </a>
                                        </p>
                                        <p class="news-date">Dec 12,2015</p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->

                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 2">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="#">
                                                a clear website gives more experience to the visitors
                                            </a>
                                        </p>
                                        <p class="news-date">Dec 12,2015</p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->
                        </div> <!-- /.footer-widget -->

                        <!-- news-letter -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>E-News-Letter</h4>

                            <p>Sign up for our mailing list to get latest updates and offers</p>
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control" type="text" placeholder="Email address">
                                <span class="input-group-addon">
                                    <i class="fa fa-paper-plane fa-fw"></i>
                                </span>
                            </div>
                            <p>We respect your privacy</p>
                        </div> <!-- /.footer-widget -->

                        <!-- about Medical Search -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Medical Search</h4>

                            <p>
                                HUGE Website Builder is a big library of pre-designed web elements which help you to create website in few minutes.
                            </p>

                            <div class="footer-address">
                                <p>
                                    1-800-123-HELLO  <br>
                                    example@mail.com
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="footer-share-button">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul> <!-- /.footer-share-button -->
                                </div>
                            </div>
                        </div> <!-- /.footer-widget -->

                    </div>
                </div>
            </footer>

        </div> <!-- end of /#search_result-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="asstes/js/script.js"></script>


    </body>
  </body>
</html>