@extends('Admin.templateAdmin.mytemplate')

@section('clientEdit')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Quảng Lý khách hàng</h5>
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
                    <form action="{{URL::to('/Admin/clientUpload/')}}/{{ $clients[0]->id }}" method="post" enctype="multipart/form-data">
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
                                <h1>Sửa khách hàng</h1>
                                <hr>
                                <div class="form-group">
                                    <label>Mã Khách Hàng</label>
                                    <input type="text" class="form-control" name="client_ma" value="{{ $clients[0]->MaKH }}" placeholder="Enter client code">
                                </div>
                                <div class="form-group">
                                    <label>Tên Khách Hàng</label>
                                    <input type="text" class="form-control" name="client_ten" value="{{ $clients[0]->TenKH }}" placeholder="Enter client name">
                                </div>
                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" class="form-control" name="client_sdt" value="{{ $clients[0]->SoDT }}" placeholder="Enter client number">
                                </div>
                                <div class="form-group">
                                    <label>Email Khách hàng</label>
                                    <input type="text" class="form-control" name="client_email" value="{{ $clients[0]->Email }}" placeholder="Enter client email">
                                </div>
                                <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <input type="text" class="form-control" name="client_address" value="{{ $clients[0]->Address }}" placeholder="Enter client Address">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh Khách</label>
                                    <input type="file" class="form-control" name="client_image">
                                </div>
                                <input type="submit" name="submit" class="btn btn-success" value="Cập Nhật" />
                                <a href="{{URL::to('/Admin/client')}}" class="btn btn-primary">Trở Lại Client</a>
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