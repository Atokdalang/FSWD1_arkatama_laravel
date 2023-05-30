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
      <title>About</title>
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
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/loading.gif') }}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a  href="{{url('/')}}">Home</a>
         <a class="active" href="{{url('/about')}}">About</a>
         <a href="{{url('/bird')}}">Our Store</a>
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
                        <li> <button class="openbtn" onclick="openNav()"><img src="{{asset('assets/menu_btn.png')}}"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
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
