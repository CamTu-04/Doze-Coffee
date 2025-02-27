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
                <li class="nav-item">
                   <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/bakery">Bakery</a></a>
               </li>
               <li class="nav-item active">
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

    <div class="tm-container">
      <div class="tm-left">
          @foreach ($all_product as $pro)
              <div id="product-{{$pro->product_id}}" class="tm-product-detail">
                  <h2>{{ $pro->product_name }}</h2>
                  <p>Giá: <strong>{{ number_format($pro->product_price, 2) }} VND</strong></p>
                  <p><img src="{{ asset('uploads/product/'.$pro->product_image) }}" alt="{{ $pro->product_name }}"></p>
                  <p>{{ $pro->product_desc }}</p>
              </div>
          @endforeach
      </div>
      <div class="tm-right">
          <h2 style="text-align: center; color: #ff6b6b;">Danh sách sản phẩm</h2>
          <div class="tm-list">
              @foreach ($all_product as $pro)
                  <div class="tm-list-item" data-id="product-{{$pro->product_id}}" onclick="showDetail('product-{{$pro->product_id}}')">
                      <img src="{{ asset('uploads/product/'.$pro->product_image) }}" alt="{{ $pro->product_name }}">
                      <h3>{{ $pro->product_name }} - <span style="color: #ff6b6b;">{{ number_format($pro->product_price, 0) }} VND</span></h3>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  <script>
      function showDetail(id) {
          document.querySelectorAll('.tm-product-detail').forEach(el => el.style.display = 'none');
          document.getElementById(id).style.display = 'block';
      }
  </script>
</body>
</html>
