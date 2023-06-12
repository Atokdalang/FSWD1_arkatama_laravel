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
      <title>Our Bird Gadget Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
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
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('assets/loading.gif')}}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a  href="{{url('/')}}">Home</a>
         <a href="{{url('/about')}}">About</a>
         <a class="active" href="{{url('/bird')}}">Our Store</a>
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
                        @auth
                        <li class="d_none">
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              @csrf <!-- Token CSRF (untuk Laravel) -->
                            </form>
                          </li>
                        @else
                        <li class="d_none"> <a href="{{url('/login')}}">Login</a> </li>
                        @endauth
                        <li> <button class="openbtn" onclick="openNav()"><img src="{{asset('assets/menu_btn.png')}}"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
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
                       <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
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
                       <p>© 2023 Bird Gadget Store — <a href="{{url('/')}}"> @Bird_Gadget_Store</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
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
