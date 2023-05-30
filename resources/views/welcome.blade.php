<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Landing Page Arkatama Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/loading.gif') }}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a class="active" href="{{url('/')}}">Home</a>
         <a href="{{url('/about')}}">About</a>
         <a href="{{url('/bird')}}">Our Bird Gadget Store</a>
         <a href="{{url('/testimonial')}}">Testimonial</a>
         <a href="{{url('/contact')}}">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="{{url('/')}}"><img src="{{ asset('assets/Gadget.png') }}" width="100px" /></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></li>
                        <li class="d_none"> <a href="Javascript:void(0)">Login</a> </li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="{{ asset('assets/menu_btn.png') }}"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div class=" banner_main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="bluid">
                     <h1>Bird <br><span class="black">Gadget <br> Store</span></h1>
                     <p>Welcome<br> Find the Best Quality Products
                        Only in the <br> Bird Gadget Store</p>
                     <a class="read_more" href="{{url('/birds')}}">Checkout </a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="{{asset('assets/ROG.jpg')}}" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="{{asset('assets/ROG2.jpg')}}" width="100%" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="{{asset('assets/Keyboard.jpg')}}" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                               <div class="carousel-caption relative">
                                  <div class="banner_img">
                                     <figure><img src="{{asset('assets/ROG3.jpg')}}" alt="#"/></figure>
                                  </div>
                               </div>
                            </div>
                         </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- about -->
      <div id="about" class="about" style="background-image: url('{{ asset('assets/Store.png') }}'); background-size: cover;">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-6">
                  <div class="titlepage text_align_right">
                     <h2 class="text-primary">About Store </h2>
                     <p style="text-align:justify">Experience the story behind Bird Gadget Store. Discover our passion for technology and commitment to providing innovative gadgets that elevate your digital lifestyle. Explore our about page and join us on our journey to redefine the world of tech.  </p>
                     <a class="read_more" href="{{url('/about')}}">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our birds -->
      <div class="birds">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Our Bird Gadget Store</h2>
                     <p style="text-align:justify"> Bird Gadget Store is an online store that specializes in providing a wide range of the latest and greatest gadgets and accessories. We believe that technology can help enrich everyday life, therefore we are committed to providing innovative products that meet the needs and desires of technology lovers.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- slider bird1 -->
               <div class="col-md-7 padding_01">
                  <div id="bird1" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird1" data-slide-to="0" class="active"></li>
                        <li data-target="#bird1" data-slide-to="1"></li>
                        <li data-target="#bird1" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide img-fluid" src="{{asset('assets/1.1.jpg')}}" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide img-fluid" src="{{asset('assets/1.2.jpg')}}" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/1.3.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/1.4.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird1" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird1" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <!-- end slider bird1 -->
               <!-- slider bird2 -->
               <div class="col-md-5 padding_01">
                  <div id="bird2" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird2" data-slide-to="0" class="active"></li>
                        <li data-target="#bird2" data-slide-to="1"></li>
                        <li data-target="#bird2" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide img-fluid" src="{{asset('assets/2.1.jpg')}}" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide img-fluid" src="{{asset('assets/2.2.jpg')}}" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/2.3.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/2.4.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird2" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird2" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <!-- end slider bird2 -->
               <!-- slider bird3 -->
               <div class="col-md-5 padding_01">
                  <div id="bird3" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird3" data-slide-to="0" class="active"></li>
                        <li data-target="#bird3" data-slide-to="1"></li>
                        <li data-target="#bird3" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide img-fluid" src="{{asset('assets/3.1.jpg')}}" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide img-fluid" src="{{asset('assets/3.2.jpg')}}" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/3.3.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/3.4.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird3" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird3" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <!-- end slider bird3 -->
               <!-- slider bird4 -->
               <div class="col-md-7 padding_01 margin_topmini70p">
                  <div id="bird4" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird4" data-slide-to="0" class="active"></li>
                        <li data-target="#bird4" data-slide-to="1"></li>
                        <li data-target="#bird4" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide img-fluid" src="{{asset('assets/4.1.jpg')}}" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide img-fluid" src="{{asset('assets/4.2.jpg')}}" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/4.3.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide img-fluid" src="{{asset('assets/4.4.jpg')}}" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird4" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird4" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
                  <a class="read_more" style="float: right; margin-top: 60px;" href="Javascript:void(0)">see more</a>
               </div>
               <!-- end slider bird4 -->
            </div>
         </div>
      </div>
      <!-- end our birds -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-9 offset-md-3">
                  <div class="titlepage text_align_right">
                     <h2>Our Testimonial</h2>
                     <span style="text-align:justify">Our customer testimonials prove the superiority of Bird Gadget Store in providing the best technology products. With friendly and responsive service, I am satisfied with the shopping experience here. The quality of the products offered is very satisfying, and competitive prices make Bird Gadget Store my top choice for gadget needs. Thank you for the great service!</span>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-7">
                  <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                        <li data-target="#testimo" data-slide-to="1"></li>
                        <li data-target="#testimo" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i><img src="{{asset('assets/Fadly.png')}}" width="150px" alt="#"/></i>
                                    <h3>Fadly Indra Agustin</h3>
                                    <span>ceo</span>
                                    <p>is a seasoned professional occupying the CEO position at Bird Gadget Store. With a background in management and marketing, Elizabeth has brought passion and expertise to growing the Bird Gadget Store brand. In his role as CEO, he is focused on developing innovative marketing strategies, building strong customer relationships, and ensuring a great shopping experience for every consumer. </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i><img src="{{asset('assets/Fajri.png')}}" width="190px" alt="#"/></i>
                                    <h3>Muhammad Fajri Jamil</h3>
                                    <span>ceo</span>
                                    <p>is a talented innovator and entrepreneur who serves as the CEO of Bird Gadget Store. With years of experience in the technology industry, he has successfully steered the company's business strategy with a clear vision. Johnathan is known as a visionary leader, who is always looking for new opportunities and leading his team to success. He is determined to make Bird Gadget Store a center of excellence in providing the latest and leading gadgets in the market.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i><img src="{{asset('assets/Rizky.png')}}" width="188px" alt="#"/></i>
                                    <h3>Rizky Rahman Salam</h3>
                                    <span>ceo</span>
                                    <p>is a technologist and entrepreneur who serves as the CEO of Bird Gadget Store. With rich experience in the technology industry, Michael has been instrumental in driving the company forward. As a technology-oriented leader, he is determined to keep Bird Gadget Store relevant to the latest changing trends and innovations in the gadget world. He continues to drive the development of superior products and forge strategic partnerships with leading brands</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="bird_img">
                     <figure><img src="{{asset('assets/Gadget.png')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!-- newsletter -->
      <div class="newsletter">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage text_align_left">
                     <h2>Newsletter</h2>
                     <p style="text-align:justify">Finish it with the Bird Gadget Store Newsletter and get exclusive access to the latest offers, special discounts and the latest information about the world of technology. Don't miss the opportunity to be the first to know about the latest products we offer. Register your email now and be part of our community which is always up-to-date with the latest developments in the gadget industry</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <form class="newslatter_form">
                     <input class="news" placeholder="Enter your email" type="text" name="Enter your email">
                     <button class="subs_btn">subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end newsletter -->
      <!--  contact -->
      <div  class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 no_ld">
                  <div class="titlepage text_align_right">
                     <h2>Contact Us</h2>
                  </div>
               </div>
               <div class="col-md-5 ">
                  <div class="contact_img">
                     <figure><img src="{{asset('assets/BGS.png')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class=" col-md-6 offset-md-1">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 no_mo">
                           <div class="titlepage text_align_right">
                              <h2>Contact Us</h2>
                           </div>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Your Name" type="type" name="Your Name">
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone number" type="type" name="Phone number">
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Email" type="type" name="Email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1 border-top1">
                     <a class="logo_footer" href="{{url('/')}}"><img src="{{ asset('assets/Gadget.png') }}" width="100px"  alt="#" /></a>
                  </div>
                  <div class="col-md-5">
                     <div class="reader">
                        <h3>Adderess</h3>
                        <ul>
                           <li>Pekanbaru, Riau<br>
                               Jl. Pendidikan, Sidomulyo Barat, Tampan
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-4">
                     <div class="reader">
                        <h3>Phone Number</h3>
                        <ul>
                           <li>(+62) 82248847135<br>
                              (+62) 81372731846
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-3 ">
                     <div class="reader">
                        <h3>Email</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)">Fadlypku1@gmail.com<br>
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)">Fadlypku1@gmail.com<br>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <ul class="social_icon text_align_center">
                        <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                        <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2023 Bird Gadget Store — <a href="{{url('/')}}"> @Bird_Gadget_Store</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
   </body>
</html>
