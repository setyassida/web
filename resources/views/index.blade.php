<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mobile Innovation Studio | Create.Innovate</title>

    <!-- core CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('/images/ico/favicon_white.ico')}}">
</head><!--/head-->

<nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo_text.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Blog Single</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">404</a></li>
                        <li><a href="#">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a></li> 
                <li><a href="#">Contact</a></li>               
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(images/slider/slider_1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Well, Hello!</h1>
                                <h1 class="animation animated-item-2">Welcome to our Studio, <br>Mobile Innovation Studio</h1>
                                <p class="animation animated-item-3 text-white">Lab MIS memberikan kenyamanan dan keamanan untuk Mahasiswa Teknik Informatika dalam menjalani Kehidupan Kuliah-nya.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <!--<img src="images/slider/img1.png" class="img-responsive"> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/slider_2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Sedikit tentang Studio ini.</h1>
                                <p class="animation animated-item-2 text-white">Mobile Innovation Studio (MIS) merupakan salah satu Laboratorium publik yang ada di jurusan Teknik Informatika ITS. MIS digunakan sebagai laboratorium pembelajaran, penelitian, dan laboratorium tugas akhir. Studio ini pada tahun 2010.</p>
                                <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
                            </div>
                            
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                               <!-- <img src="images/slider/img2.png" class="img-responsive"> -->
                           </div>
                       </div>

                   </div>
               </div>
           </div><!--/.item-->

           <div class="item" style="background-image: url(images/slider/slider_3.jpg)">
            <div class="container">
                <div class="row slide-margin">
                    <div class="col-sm-6">
                        <div class="carousel-content">
                            <h1 class="animation animated-item-1">Kami memberikan Pelayanan, bukan penyesalan</h1>
                            <p class="animation animated-item-2 text-white">Seperti kebanyakan Laboratorium yang ada di Teknik Informatika ITS, Mobile Innovation Studio memiliki beragam fasilitas yang dapat dimanfaatkan oleh user baik User Mahasiswa dari Teknik Informatika ITS maupun User luar yang berkepentingan terhadap Laboratorium ini dengan izin tertulis yang jelas.</p>
                            <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-sm-6 hidden-xs animation animated-item-4">
                        <div class="slider-img">
                           <!-- <img src="images/slider/img3.png" class="img-responsive"> -->
                       </div>
                   </div>
               </div>
           </div>
       </div><!--/.item-->
   </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="fa fa-chevron-right"></i>
</a>
</section><!--/#main-slider-->

<section id="feature" >
    <!-- <div class="container">
       <div class="center wow fadeInDown">
        <h2>Features</h2>
        <p class="lead">Mobile Innovation Studio</p>
    </div>
-->

<div class="center wow fadeInDown text-center">
    <h2>LifeHack for You</h2>
    <p class="lead col-md-2"></p>
    <p class="lead col-md-8">"Work like hell. I mean you just have to put in 80 to 100 hour weeks every week. [This] improves the odds of success. If other people are putting in 40 hour workweeks and you're putting in 100 hour workweeks, then even if you're doing the same thing, you know that you will achieve in four months what it takes them a year to achieve."
        <br><b>-Elon Musk-</b>
    </p>

</div>
<div class="row">
    <div class="features">

            <!-- <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="feature-wrap">
                    <i class="fa fa-bullhorn"></i>
                    <h2>Tentng MIS</h2>
                    <h3>Lab mobile Innovation Studio Adalah ~~</h3>
                </div>
            </div> --><!--/.col-md-4-->

            <!-- <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="feature-wrap">
                    <i class="fa fa-comments"></i>
                    <h2>Admin</h2>
                    <h3>blablabla</h3>
                </div>
            </div> --><!--/.col-md-4-->

           <!--  <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="feature-wrap">
                    <i class="fa fa-cloud-download"></i>
                    <h2>Easy to customize</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                </div>
            </div> --><!--/.col-md-4-->
<!--                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Adipisicing elit</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!/.col-md-4> 

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!/.col-md-4>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!/.col-md-4>
                -->
            </div><!--/.services-->
        </div><!--/.row-->    
    </div><!--/.container-->
</section><!--/#feature-->

<!--      <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><--!/.row
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Prestation</h2>
                <p class="lead">Mobile Innovation Studio terus berusaha untuk mengembangkan sayapnya. Untuk merealasisasikan hal tersebut, MIS berusaha untuk tetap berkarya seperti mengikuti kompetisi-kompetisi yang cukup bergengsi dan tentunya di bidang Mobile Apps Dveloper. Berikut ini beberapa prestasi Laboratorium Mobile Innovation Studio :
                </p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Juara 1 BASIC FTIf Festival 2017</h3>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"> Juara 2 Mobile Apps Competition 2017</h3>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Juara 2 Application MAGE 2017</h3>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Finalis Go-Hackathon by Go-Jek 2017</h3>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Finalis BCA FinHacks 2016</h3>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Finalis BRI Hackathon 2016</h3>
                            <p></p>
                        </div>
                    </div>
                </div>







 <!--               <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  -->                                              
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <!--<section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Partner</h2>
                        <p>Prestasi yang pernah kita raih</p>

                        <div class="progress-wrap">
                            <h3>Graphic Design</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>HTML</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!/.col-sm-6>

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why People like us?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div><!/#accordion1>
                    </div>
                </div>

            </div><!/.row>
        </div><!/.container>
    </section><!/#middle>-->

    <section id="feature" >
    <!-- <div class="container">
       <div class="center wow fadeInDown">
        <h2>Features</h2>
        <p class="lead">Mobile Innovation Studio</p>
    </div>
-->

<div class="center wow fadeInDown text-center">
    <h2>LifeHack for You</h2>
    <p class="lead col-md-2"></p>
    <p class="lead col-md-8">"It's fine to celebrate success, but it is more important to heed the lessons of failure."
        <br><b>-Bill Gates-</b>
    </p>
    <br>

</div>

</section><!--/#feature-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Partners</h2>
            <p class="lead">Institut Teknologi Sepuluh Nopember | Departemen Teknik Informatika - FTIK | Himpunan Mahasiswa Teknik Computer-Informatika</p>
        </div>    

        <div class="partners">
            <div class="row text-center container"> 
                <div class="col-md-4 media_image">  <a href="http://www.its.ac.id"><img class=" wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/its_fix.png"></a></li> </div>
                <div class="col-md-4 media_image">   <a href="http://www.if.its.ac.id"><img class=" wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/if_fix.png"></a></div>
                <div class="col-md-4 media_image">   <a href="http://www.hmtc.if.its.ac.id"><img class=" wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/hmtc.png"></a></div>

            </div>
        </div>        
    </div>
</section>
<!--/#partner -->

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                    </div>
                    <div class="media-body">
                        <h2>Ingin menanyakan sesuatu atau ingin bekerja sama dengan kami?</h2>
                        <p>Mobile Innovation Studio sangat terbuka untuk kamu yang ingin mengembangkan aplikasi Mobile dan Website. Segera hubungi kami, +62 822 6445 7770</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->

<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row media_image margin_top">
            <div class="widget"> 
                <div class="col-md-3">  <h3>MIS</h3> </div>
                <div class="col-md-3">  <h3>Our Project</h3> </div>
                <div class="col-md-6">  <h3>Admin</h3> </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Meet the team</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Refund policy</a></li>
                        <li><a href="#">Ticket system</a></li>
                        <li><a href="#">Billing system</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <ul>
                        <li><h2>2014</h2></li>
                        <li><a href="http://setomulyadi.ml/Adam W. Bagaskarta">Adam W. Bagaskarta</a></li>
                        <li><a href="http://setomulyadi.ml/Aditya Ikhsan">Aditya Ikhsan</a></li>
                        <li><a href="http://setomulyadi.ml/Muhammad Hanif">Muhammad Hanif</a></li>
                        <li><a href="http://setomulyadi.ml/Setyassida Novian Putra Damara">Setyassida Novian Putra Damara</a></li>
                        <li><a href="#">Winda Dwiastini </a></li>
                        <li><a href="http://setomulyadi.ml/Fatihah Ulya">Fatihah Ulya</a></li>
                        <li><a href="http://setomulyadi.ml/Irfan Hanif">Irfan Hanif</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <ul>
                        <li><h2>2015</h2></li>
                        <li><a href="http://setomulyadi.ml/Anisa PD">Anisa PD</a></li>
                        <li><a href="http://setomulyadi.ml/Ariya Wildan">Ariya Wildan</a></li>
                        <li><a href="http://setomulyadi.ml/Fajar Maulana F">Fajar Maulana F</a></li>
                        <li><a href="http://setomulyadi.ml/Rafi R. Ramadhan">Rafi R. Ramadhan</a></li>

                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue margin_bot">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">MIS</a>. All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/wow.min.js')}}"></script>
</body>
</html>