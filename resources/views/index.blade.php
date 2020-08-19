<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akij IT</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;0,800;1,100;1,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <!--Header part-->
    <header>
        <div class="top-header">
            <div class="container">
                <div class="float-left">
                    <p class="pt-2">
                        Social Icons
                        <a href="#" class="ml-4"><i class="fa fa-facebook"></i></a>
                        <a href="#"class="ml-2"><i class="fa fa-twitter text-secondary"></i></a>
                        <a href="#"class="ml-2"><i class="fa fa-linkedin text-secondary"></i></a>
                        
                    </p>
                </div>
                <div class="float-right mt-2">
                    A concern of Akij Group
                    <img src="{{asset('/images/logo/icon.png')}}" alt="icon">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="bottom-header">
            <div class="container">
              <div class="row">
                  <div class="col-6">
                    <a href=""><img src="images/logo/logo.png" alt="Logo" class="logo-main"></a>
                  </div>
                  <div class="col-6 mt-4">
                      <div class="row for-text">
                          <div class="col-5">
                            Toll Free: 08000016609
                            <br>
                            <strong>Hot Line: 16609</strong>
                          </div>
                          <div class="col-4">
                            Email us
                            <br>
                            <strong>info@akijfood.com</strong>
                          </div>
                          <div class="col-3">
                            “Quality First”
                            <br>
                            -SK.AKIJ UDDIN
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
    <!--Header part-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-main">
        <div class="container">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Brands</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
               
               
            </div>
        </div>
    </nav>
    <!--Navigation-->
    <nav>

    </nav>
    <!--Navigation-->
    
    <!--Slider-->
    <section id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider/slider1.png" class="d-block w-100" alt="slider">
              </div>
              <div class="carousel-item">
                <img src="images/slider/slider2.png" class="d-block w-100" alt="slider">
              </div>
              <div class="carousel-item">
                <img src="images/slider/slider3.png" class="d-block w-100" alt="slider">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <!--Slider-->

    <!--Bottom-Slider-->
    <section id="main-content">
        <div id="bottom-slider">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="bottom-slider-box">
                            <h3>AFBL For Society</h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bottom-slider-box">
                            <h3>Brands of Afbl</h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bottom-slider-box">
                            <h3>achievement</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Bottom-Slider-->

        <!--section-header-->
        <div class="section-header">
            Our Products
        </div>
        <!--section-header-->

        <!--Product-->
        <div id="product">
            <div class="container ">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-3">
                            <div class="single-product">
                                <img src="{{Storage::url($product->image)}}" alt="Picture">
                                <h5>{{$product->name}}</h5>
                            </div>
                        </div>
                    @endforeach
                    
                    
                    <div class="text-center p-4">
                        <a href="#" class="btn-all-products">All Products</a>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!--Product-->
    </section>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="single-service">
                        <div class="round pt-4">
                            <img src="images/service/afbl.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="single-service">
                        <div class="round pt-4">
                            <img src="images/service/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="single-service">
                        <div class="round">
                            <img src="images/service/3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="single-service">
                        <div class="round">
                            <img src="images/service/4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="single-service">
                        <div class="round">
                            <img src="images/service/5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="single-service">
                        <div class="round">
                            <img src="images/service/6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section-header-->
    <div class="section-header">
        News and Events
    </div>
    <!--section-header-->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="single-news">
                    <img src="images/news/1.png" alt="">
                    <span>সারাদেশে ঘুরছে মোজো শানদার কার। শান দেয়া একদম ফ্রি!
                        সাথে অসংখ্য উপহার তো থাকছেই...</span>
                     <p>Aug 01, 2019</p>
                </div>
            </div>
            <div class="col-4">
                <div class="single-news">
                    <img src="images/news/CLEMON-Cover-1.png" alt="">
                    <span>অবশেষে দেখা মিলল ক্লেমনের নতুন আয়োজনের। তাই যদি Refreshed হতে চায় মন,
                        ক্লেমনের...</span>
                     <p>May 30, 2019</p>
                </div>
            </div>
            <div class="col-4">
                <div class="single-news">
                    <img src="images/news/Screenshot_2.png" alt="">
                    <span>বিমান ছিনতাই করতে গিয়ে বিপাকে পড়লেন ছিনতাইকারীরা!!!!</span>
                    <p>Jul 27, 2019</p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer id="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-4 mt-5">
                    <img src="images/logo/logo.png" alt="">
                    <p class="pt-2">
                        <a href="#" class="ml-5"><i class="fa fa-facebook"></i></a>
                        <a href="#"class="ml-2"><i class="fa fa-twitter text-secondary"></i></a>
                        <a href="#"class="ml-2"><i class="fa fa-linkedin text-secondary"></i></a>
                        
                    </p>
                </div>
                <div class="col-4">
                    <h4>Contact us</h4>
                    <ul>
                       <i class="fa fa-phone"> +880 96131 16609</i>
                       <br>
                        <li class="fa fa-envelope">info@akij.net</li>
                        <br>
                        <li class="fa fa-map-marker">Head Office: Akij House, 198 Bir Uttam, Mir Shawkat Sarak, Gulshan Link Road, Tejgaon, Dhaka-1208</li>
                        <li>Factory: Krisnopura, Dhamrai, Dhaka, N5</li>
                        <br>
                        <li class="fa fa-clock">Sat to Thu - 9:00am to 6:00pm (Friday Closed)</li>
                        <li>Sat to Thu - 9:00am to 6:00pm (Friday Closed)</li>
                    </ul>
                </div>
                <div class="col-4">
                    <h4>Important Links</h4>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><a href="">Brochure</a></li>
                                <li><a href="">Contact Center</a></li>
                                <li><a href="">Career</a></li>
                                <li><a href="">Brands</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li><a href="">E-commerce Shop</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center mt-4 pb-2">© Copyright © 2019 AFBL. All rights reserved. Developed by Akij Group IT</p>
    </footer>
    <!--Footer-->
    <!--Scripts-->
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--Scripts-->
</body>
</html>