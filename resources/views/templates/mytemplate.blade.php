@include('includes.header')

<div class="my-5">
<!-- Home -->
@yield('home')
<!-- about -->
@yield('about')
<!-- product -->
@yield('product')
<!-- đăng ký khách hàng -->
@yield('khachhang')
@yield('members')
@yield('invoices')
<!-- contact -->
@yield('contact')
<!-- Xem TV -->
@yield('xemkh')
<!-- xem SP -->
@yield('xemsp')
</div>

@include('includes.footer')