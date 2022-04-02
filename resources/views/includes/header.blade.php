<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
 </head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!" style="color: orange;"><b>CAMMERA SHOPP</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{URL::to('/home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('/about')}}">Thông Tin</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('/product')}}">Sản Phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('/xemkh')}}">Xem Khách Hàng</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">Liên hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('/khachhang')}}">Đăng Ký</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('/invoices')}}">Hóa Đơn</a></li>
                    </ul>
                    <form class="d-flex mx-2">
                        <button class="btn btn-outline-warning" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            <b>Cart</b>
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    
                    @if (Route::has('login'))
                            <div class="hidden fixed">
                                @auth
                                <button class="btn btn-outline-success">
                                    <a href="{{ url('/admin') }}" class="nav-link" style="line-height: 0.5 !important;"><b>admin</b></a>
                                </button>
                                @else
                                <button class="btn btn-outline-danger">
                                    <a href="{{ route('login') }}" class="nav-link" style="line-height: 0.5 !important;"><b>Đăng Nhập</b></a>
                                </button>
                            @endauth
                        </div>
                    @endif
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        