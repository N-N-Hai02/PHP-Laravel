@extends('Admin.templateAdmin.mytemplate')

@section('staffAdd')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Thêm Nhân Viên</h5>
                        <p class="m-b-0">Hello các bạn xin Chào</p>
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
                    <form action="{{URL::to('/Admin/staff_Save')}}" method="post" enctype="multipart/form-data">
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
                                <button class="btn btn-secondary"><a href="/" style="color: #fff;">Back Trang chủ</a></button>
                                <h1>Thêm Nhân Viên</h1>
                                <hr>
                                <div class="form-group">
                                    <label>Mã Nhân Viên</label>
                                    <input type="text" class="form-control" name="staff_ma" placeholder="Enter staff code">
                                </div>
                                <div class="form-group">
                                    <label>Tên Nhân Viên</label>
                                    <input type="text" class="form-control" name="staff_ten" placeholder="Enter staff name">
                                </div>
                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" class="form-control" name="staff_sdt" placeholder="Enter staff number">
                                </div>
                                <div class="form-group">
                                    <label>Email Nhân Viên</label>
                                    <input type="text" class="form-control" name="staff_email" placeholder="Enter staff email">
                                </div>
                                <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <input type="text" class="form-control" name="staff_address" placeholder="Enter staff Address">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh Nhân Viên</label>
                                    <input type="file" class="form-control" name="staff_image">
                                </div>
                                <input type="submit" name="submit" class="btn btn-success" value="Thêm Nhân Viên" />
                                <a href="{{URL::to('/Admin/staff')}}" class="btn btn-primary">Trở Lại Danh Sách Nhân Viên</a>
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