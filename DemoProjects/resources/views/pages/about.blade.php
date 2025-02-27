<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coffee Menu</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Poppins:400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/tooplate-wave-cafe.css') }}">
    </head>
   <body>
    <div class="header_section header_bg">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand"href="/"><img src="frontend/images/logo.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                       <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/bakery">Bakery</a></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/coffee">Coffee</a></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                    <div class="login_bt">
                       <ul>
                          <li><a href="/admin" style="color: rgba(0, 0, 0, 0.7); padding: 8px 12px; border-radius: 5px; transition: color 0.3s ease, background 0.3s ease;" 
                            onmouseover="this.style.color='white'; this.style.background='rgba(0, 0, 0, 0.7)'" 
                            onmouseout="this.style.color='rgba(0, 0, 0, 0.7)'; this.style.background='transparent'">
                             <span class="user_icon" style="margin-right: 5px; color: #ff6b6b;"><i class="fa fa-user" aria-hidden="true"></i></span>Login
                            </a></li>
                          <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                       </ul>
                    </div>
                 </form>
              </div>
           </nav>
        </div>
     </div>

     <div class="about_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="about_taital">About Our shop</h1>
                 <div class="bulit_icon"><img src="frontend/images/bulit-icon.png"></div>
              </div>
           </div>
           <div class="about_section_2 layout_padding">
              <div class="image_iman"><img src="frontend/images/about-1.png" class="about_img"></div>
           </div>
        </div>
     </div>
     <!-- about section end -->
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
                    <div class="subscribe_bt"><a href="#"><img src="frontend/images/teligram-icon.png"></a></div>
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
     <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
     <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
     <script src="{{ asset('frontend/js/plugin.js') }}"></script>
     <!-- sidebar -->
     <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
     <script src="{{ asset('frontend/js/custom.js') }}"></script>
  </body>
</html>