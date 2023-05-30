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
      <title>Testimonial</title>
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
         <div class="loader"><img src="{{asset('assets/loading.gif')}}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="{{url('/')}}">Home</a>
         <a href="{{url('/about')}}">About</a>
         <a href="{{url('/bird')}}">Our Store</a>
         <a  class="active" href="{{url('/testimonial')}}">Testimonial</a>
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
