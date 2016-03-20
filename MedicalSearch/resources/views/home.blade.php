<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>Medical Search - Home</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script>
            function OnSelectedIndexChange_test()
            {
               // window.alert(document.getElementById('test_cat').value);
                var sel_cat=document.getElementById('test_cat').value;
                //if (document.getElementById('test_cat').value == "Dhaka")
                
                var emply = document.getElementById('test').innerHTML="";
                var a = document.getElementById('test');
               


                
                var val;
               
                for (val of {!! $tests !!} ) {
                    //window.alert({!! $tests !!});
                    if(sel_cat==val.category_id){
                        var option = document.createElement("option");
                        option.innerHTML = val.name;
                        option.id=val.id;
                        option.value=val.id;

                        a.add(option);
                    }

                }
               
            }


             function OnSelectedIndexChange_area()
            {
               
                var sel_cat=document.getElementById('district').value;
               
                
                var empty = document.getElementById('area').innerHTML="";
                var a = document.getElementById('area');
                
 

               // window.alert( sel_cat);


                
                var val;
               
                for (val of {!! $diag_area !!} ) {
                    //window.alert(val.district_id);
                    if(sel_cat==val.district_id){
                        var option = document.createElement("option");
                        option.innerHTML = val.name;
                        option.id=val.id;
                        option.value=val.id;

                        a.add(option);
                    }

                }
               
            }
        </script>


    </head>

    <body>

        <div id="home-page">

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

            


            <!--  begin intro section -->

            <section class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="intro">
                        </div>

                        <div class="col-md-7">
                            <div class="intro-description">
                                <!-- my search widget -->
                                <h2 style="width:500px;text-align: center;">Search test nearby</h2>

                                <form action="results" method="post" style="width: 500px">

                                <meta name="csrf-token" content="{{ csrf_token() }}" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div style="display: inline-block">

                                        
                                        <select id="test_cat" name="test_category" style="width: 250px;height:50px;text-align: center" onChange="OnSelectedIndexChange_test()">
                                            
                                            <option value="select Category">Select Test Category</option>
                                            
                                            @foreach ($test_category as $tc)
                                                <option id="{{$tc->category_id}}" value= "{{$tc->category_id}}" > {{ $tc->name }}</option>
                                            @endforeach

                                            
                                        
                                        </select>


                                        <select id="test" name="test_name" style="width: 250px;height:50px;text-align: center; " >
                                            <option value="select Test">Select Test</option>
                                        
                                        </select>
                                        </div>
                                        <select id="district" name="district" style="width: 500px;height:50px;text-align: center; " 
                                        onChange="OnSelectedIndexChange_area()" >
                                            
                                          <option>Select District</option>

                                             @foreach ($diag_district as $tc)
                                                <option id="{{$tc->id}}" value="{{$tc->id}}">{{ $tc->name }}</option>
                                            @endforeach
                                        </select>
                                        <select id="area" name="area" style="width: 500px;height:50px;text-align: center" 
                                        >
                                          <option>Select Area</option>
                                         <!--   @foreach ($diag_area as $tc)
                                                <option id="{{$tc->id}}" value="{{$tc->id}}">{{ $tc->name }}</option>
                                            @endforeach
                                        -->
                                        </select>
                                        <br><br>
                                        <input type="submit" value="SEARCH" style="height : 60px;width:230px;margin-left:120px;margin-right:120px;background-color: #2196f3;color: #ffffff;font-weight: bold;">

                                </form>
                            </div> <!-- end of /.intro-description -->
                        </div>
                    </div>
                </div> <!-- end of /.container -->
            </section> 
            <!--  end of intro section -->




            <!--  begin services section -->

            <section>
                <div class="container">

                    <div class="headline text-center">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="section-title">what we do</h2>
                                <p class="section-sub-title">
                                    absolutely stunning design &amp; functionality
                                </p> <!-- /.section-sub-title -->
                            </div>
                        </div>
                    </div> <!-- /.headline -->

                    <div class="service-list">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="service-content text-center">
                                    <div class="service-icon-box">
                                        <div class="service-icon center-block">
                                            <i class="fa fa-umbrella"></i>
                                        </div>
                                    </div> <!--  end of .service-icon-box  -->
                                    <div class="service-info">
                                        <h3 class="service-heading">24/7 Support</h3>
                                        <p class="service-description">
                                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                        </p> 
                                    </div> <!--   end of .service-info  -->
                                </div> <!--  end of .service-content  -->
                            </div>

                            <div class="col-md-4">
                                <div class="service-content text-center">
                                    <div class="service-icon-box">
                                        <div class="service-icon center-block">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div>
                                    </div> <!--  end of .service-icon-box  -->
                                    <div class="service-info">
                                        <h3 class="service-heading">Smooth and Fast</h3>
                                        <p class="service-description">
                                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                        </p> 
                                    </div> <!--   end of .service-info  -->
                                </div> <!--  end of .service-content  -->
                            </div>

                            <div class="col-md-4">
                                <div class="service-content text-center">
                                    <div class="service-icon-box">
                                        <div class="service-icon center-block">
                                            <i class="fa fa-bug"></i>
                                        </div>
                                    </div> <!--  end of .service-icon-box  -->
                                    <div class="service-info">
                                        <h3 class="service-heading">Bugs Free Code</h3>
                                        <p class="service-description">
                                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                        </p> 
                                    </div> <!--   end of .service-info  -->
                                </div> <!--  end of .service-content  -->
                            </div>

                            <div class="col-md-4">
                                <div class="service-content text-center">
                                    <div class="service-icon-box">
                                        <div class="service-icon center-block">
                                            <i class="fa fa-cloud-download"></i>
                                        </div>
                                    </div> <!--  end of .service-icon-box  -->
                                    <div class="service-info">
                                        <h3 class="service-heading">Landing Pages</h3>
                                        <p class="service-description">
                                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                        </p> 
                                    </div> <!--   end of .service-info  -->
                                </div> <!--  end of .service-content  -->
                            </div>

                            <div class="col-md-4">
                                <div class="service-content text-center">
                                    <div class="service-icon-box">
                                        <div class="service-icon center-block">
                                            <i class="fa fa-tachometer"></i>
                                        </div>
                                    </div> <!--  end of .service-icon-box  -->
                                    <div class="service-info">
                                        <h3 class="service-heading">Huge Dashboard</h3>
                                        <p class="service-description">
                                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                        </p> 
                                    </div> <!--   end of .service-info  -->
                                </div> <!--  end of .service-content  -->
                            </div>

                            <div class="col-md-4">
                                <div class="service-content text-center">
                                    <div class="service-icon-box">
                                        <div class="service-icon center-block">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                    </div> <!--  end of .service-icon-box  -->
                                    <div class="service-info">
                                        <h3 class="service-heading">Elegant Design</h3>
                                        <p class="service-description">
                                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                                        </p> 
                                    </div> <!--   end of .service-info  -->
                                </div> <!--  end of .service-content  -->
                            </div>

                        </div> <!--  end of .row  -->
                    </div> <!--  end of .service-list  -->
                </div> <!-- end of .container -->
            </section> 
            <!--  end of services section -->



            <!--  begin testimonial section  -->

            <section>
                <div class="container">

                    <div class="headline text-center">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="section-title">testimonials</h2>
                                <p class="section-sub-title">
                                    absolutely stunning design &amp; functionality
                                </p> <!-- /.section-sub-title -->
                            </div>
                        </div>
                    </div> <!-- /.headline -->

                    <div id="client-speech" class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="client-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive center-block" src="assets/img/client1.jpg" alt="client1">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="main-speech">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>

                                                    <b class="client-intro">Clent Designation</b>
                                                </div> <!-- end of /.main-speech  -->
                                            </div>
                                            
                                        </div> <!-- end of /.row -->
                                    </div>
                                        
                                </div>

                                <div class="col-md-6">
                                    <div class="client-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive center-block" src="assets/img/client4.jpg" alt="client1">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="main-speech">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>
                                                    <b class="client-intro">Clent Designation</b>
                                                </div> <!-- end of /.main-speech  -->
                                            </div>
                                            
                                        </div> <!-- end of /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="client-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive center-block" src="assets/img/client5.jpg" alt="client1">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="main-speech">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>
                                                    <b class="client-intro">Clent Designation</b>
                                                </div> <!-- end of /.main-speech  -->
                                            </div>
                                            
                                        </div> <!-- end of /.row -->
                                    </div>
                                        
                                </div>

                                <div class="col-md-6">
                                    <div class="client-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive center-block" src="assets/img/client2.jpg" alt="client1">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="main-speech">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>
                                                    <b class="client-intro">Clent Designation</b>
                                                </div> <!-- end of /.main-speech  -->
                                            </div>
                                            
                                        </div> <!-- end of /.row -->
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="client-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive center-block" src="assets/img/client3.jpg" alt="client1">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="main-speech">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>
                                                    <b class="client-intro">Clent Designation</b>
                                                </div> <!-- end of /.main-speech  -->
                                            </div>
                                        </div> <!-- end of /.row -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="client-box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive center-block" src="assets/img/client6.jpg" alt="client1">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="main-speech">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>
                                                    <b class="client-intro">Clent Designation</b>
                                                </div> <!-- end of /.main-speech  -->
                                            </div>
                                            
                                        </div> <!-- end of /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- end of /#client-speech  /.owl-carousel -->

                </div> <!-- end of .container -->
            </section> 
            <!--  end of testimonial  section -->



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
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="asstes/js/script.js"></script>

        <!-- script for testimonial section using owl carousel -->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#client-speech").owlCarousel({
                 
                    autoPlay: 5000, //Set AutoPlay to 3 seconds
                    stopOnHover: true,
                    singleItem:true
                });
 
            });
        </script>


    </body>
</html>