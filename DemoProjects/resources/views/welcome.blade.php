<!DOCTYPE html>
<html>
   <head>
      <!-- Basic Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Site Meta -->
      <title>DOZECAFE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
      
      <!-- Custom Styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

      <!-- Favicon -->
      <link rel="icon" href="{{ asset('frontend/images/fevicon.png') }}" type="image/gif" />

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- Nội dung trang web -->
   </body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="\"><img src="frontend/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="\">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="\about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="\bakery">Bakery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="\coffee">Coffees</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="\blog">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="{{URL::to('/admin')}}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="frontend/images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Cake Cafe</h1>
                                 <h5 class="tasty_text">Tasty Of Cake</h5>
                                 <p class="banner_text">Great flavor combinations, creating exceptional solutions </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">OUR CAKES OFFER</h1>
               <div class="bulit_icon"><img src="frontend/images/bulit-icon.png"></div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="frontend/images/img-1.png"></div>
                              <h3 class="types_text">Latte</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="frontend/images/img-2.png"></div>
                              <h3 class="types_text">Cappuccino</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="frontend/images/img-3.png"></div>
                              <h3 class="types_text">Espresso</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="frontend/images/img-4.png"></div>
                              <h3 class="types_text">Hot coffee</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="https://product.hstatic.net/1000104153/product/hawaii_mousse_0b7634f35012441cacaf833c24b4a793_grande.png"></div>
                              <h3 class="types_text">Hawaii mousse</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="https://product.hstatic.net/1000104153/product/dd525367-1d09-4c51-9e38-d8625bbadd0a_a9424dae1a8e46859efdbf10dc8b20e2_grande.jpg"></div>
                              <h3 class="types_text">Passion fruit mousse</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="https://product.hstatic.net/1000104153/product/tiramisu_cake_16a01603c84a4217826a59da6c6f6cfd_grande.jpg"></div>
                              <h3 class="types_text">Tiramisu Cake</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="https://product.hstatic.net/1000104153/product/seasonal_fruit_cake_2e127af76a234fe9b261d154309456ed_grande.png"></div>
                              <h3 class="types_text">Seasonal fruit Cake</h3>
                              <p class="looking_text">Looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">About Our shop</h1>
                  <div class="bulit_icon"><img src="frontend/images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><img src="frontend/images/about-img.jpg" class="about_img"></div>
               <div class="about_taital_box">
                  <h1 class="about_taital_1">Doze Cafe</h1>
                  <p class=" about_text">Our cafe is a cozy space where you can enjoy delicious pastries made from fresh ingredients. With a perfect blend of sweet and savory options, our bakery offers a rich culinary experience for all guests. Our dedicated team of chefs continually innovates and refines traditional recipes to provide unique and enticing flavors. Come visit us to savor not only wonderful dishes but also create memorable moments with friends and family!</p>
                  <div class="readmore_btn"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">What syas customers</h1>
                  <div class="bulit_icon"><img src="frontend/images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="client_section_2">
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="frontend/images/client-img1.png"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text">Joy Moark</h3>
                     <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                  </div>
               </div>
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="frontend/images/client-img2.png"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text">Mihacal</h3>
                     <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                  </div>
               </div>
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="frontend/images/client-img3.png"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text">Uliya den</h3>
                     <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Our Blog</h1>
                  <div class="bulit_icon"><img src="frontend/images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="frontend/images/blog-img1.png"></div>
                        <h4 class="date_text">05 April</h4>
                        <h4 class="prep_text">PREP TECHNIQUES Coffee</h4>
                        <p class="lorem_text">distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more</p>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="frontend/images/blog-img2.png"></div>
                        <h4 class="date_text">05 April</h4>
                        <h4 class="prep_text">PREP TECHNIQUES Coffee</h4>
                        <p class="lorem_text">distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more</p>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
                  <div class="bulit_icon"><img src="frontend/images/bulit-icon.png"></div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                     </div>
                  </div>
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="address_text">Address</h1>
                  <p class="footer_text">here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use </p>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('frontend/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('frontend/js/custom.js')}}"></script>
   </body>
</html>