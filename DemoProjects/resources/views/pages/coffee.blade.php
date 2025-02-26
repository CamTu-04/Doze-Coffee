<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/tooplate-wave-cafe.css') }}">
    <style>
        .tm-container {
            display: flex;
        }
        .tm-left, .tm-right {
            width: 50%;
            overflow-y: auto;
            border-right: 2px solid #333;
            padding: 20px;
        }
        .tm-right {
            border-right: none;
            border-left: 2px solid #333;
        }
        .tm-list-item {
            cursor: pointer;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .tm-list-item img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
        .tm-list-item:hover {
            background: #f0f0f0;
        }
        .tm-product-detail {
            display: none;
        }
        .tm-product-detail img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="tm-container">
        <!-- Khung bên trái hiển thị chi tiết sản phẩm -->
        <div class="tm-left">
            @foreach ($all_product as $pro)
                <div id="product-{{$pro->product_id}}" class="tm-product-detail">
                    <h2>{{ $pro->product_name }}</h2>
                    <p>Giá: {{ number_format($pro->product_price, 2) }} VND</p>
                    <p><img src="{{ asset('uploads/product/'.$pro->product_image) }}" height="150" width="150"></p>
                    <p>{{ $pro->product_desc }}</p>
                </div>
            @endforeach
        </div>

        <!-- Khung bên phải hiển thị danh sách sản phẩm -->
        <div class="tm-right">
            <h2>Danh sách sản phẩm</h2>
            <div class="tm-list">
                @foreach ($all_product as $pro)
                    <div class="tm-list-item" data-id="product-{{$pro->product_id}}" onclick="showDetail('product-{{$pro->product_id}}')">
                        <img src="{{ asset('uploads/product/'.$pro->product_image) }}" alt="{{ $pro->product_name }}">
                        <h3>{{ $pro->product_name }} - {{ number_format($pro->product_price, 2) }} VND</h3>
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
