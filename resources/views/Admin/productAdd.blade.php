@extends('Admin.templateAdmin.mytemplate')

@section('productAdd')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Quảng Lý Sản Phẩm</h5>
                        <p class="m-b-0">Hello các bạn prd</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><b>Dashboard</b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
      <div class="pcoded-inner-content">
          <!-- Main-body start -->
          <div class="main-body">
              <div class="page-wrapper">
                  <!-- Page-body start -->
                  <div class="page-body">
                    <form action="{{URL::to('/Admin/product_Save')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="container">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    Data validation error :
                                    <ul>
                                        @foreach ($errors->all() as $errors)
                                            <li>{{$errors}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <h4>{{ \Session::get('success') }}</h4>
                            </div>
                            @endif
                            <div class="jumbotron" style="margin-top:5%;">
                                <button class="btn btn-secondary"><a href="/" style="color: #fff;">Back Home</a></button>
                                <h1>Thêm Mới Sản Phẩm</h1>
                                <hr>
                                <div class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" name="prd_name" placeholder="Điền Vào Tên Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Miêu Tả</label>
                                    <textarea type="text" class="form-control" name="prd_mieuta" placeholder="Miêu Tả Về Sản Phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Số Lượng</label>
                                    <input type="number" class="form-control" name="prd_soluong" placeholder="Số Lượng">
                                </div>
                                <div class="form-group">
                                    <label>Giá Bán</label>
                                    <input type="number" class="form-control" name="prd_price" placeholder="Điền Vào Giá Bán">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh Student</label>
                                    <input type="file" class="form-control" name="prd_image">
                                </div>
                                <input type="submit" name="submit" class="btn btn-success" value="Thêm" />
                                <a href="{{URL::to('/Admin/product')}}" class="btn btn-primary">Quay Lại Sản Phẩm</a>
                            </div>
                        </div>
                    </form>
                  </div>
                  <!-- Page-body end -->
              </div>
              <div id="styleSelector"> </div>
          </div>
      </div>
  </div>
</div>
@endsection