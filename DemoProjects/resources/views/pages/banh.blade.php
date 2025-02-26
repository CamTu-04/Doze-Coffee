<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Menu</title>
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/tooplate-wave-cafe.css') }}">
</head>
<body>
    <div class="header_section">
        <nav class="navbar">
            <a class="navbar-brand" href="/">
                <img src="frontend/images/logo.png">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/bakery">Bakery</a></li>
                <li class="nav-item"><a class="nav-link" href="/coffee">Coffees</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </nav>
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
                      <h3>{{ $pro->product_name }} - <span style="color: #ff6b6b;">{{ number_format($pro->product_price, 2) }} VND</span></h3>
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
