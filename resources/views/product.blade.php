<!-- khai báo kết quả kết nối với mytemplate : -->
@extends('templates.mytemplate')

<!-- các section : -->
@section('product')
<style>
    img.card-img-top {
        height: 100%;
    }
</style>
<section class="py-5">
            <div class="Ten_Product py-5">
                <h1 style="text-align:center"><b>TẤT CẢ SẢN PHẨM</b></h1>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($products as $row)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{$row->Image}}" style="width:268 !important;height:268px !important;"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{$row->ProductName}}</h5>
                                    Giá Bán : {{$row->Price}}
                                    <p>Còn {{$row->Quantity}} Sản Phẩm !!</p>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent row">
                                <div class="text-center col-6"><a class="btn btn-outline-warning mt-auto" href="{{URL::to('/invoices')}}"><b>Đặt Mua</b></a></div>
                                <div class="text-center col-6"><a class="btn btn-primary mt-auto" href="#"><b>Add Cart</b></a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection