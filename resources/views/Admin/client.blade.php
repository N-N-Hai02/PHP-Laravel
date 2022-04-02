@extends('Admin.templateAdmin.mytemplate')

@section('client')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Quảng lý Khách Hàng</h5>
                        <p class="m-b-0">Hello các bạn</p>
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
                    <div class="container">
                        @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <h4>{{ \Session::get('success') }}</h4>
                        </div>
                        @endif
                        <div class="jumbotron">
                            <button class="btn btn-secondary"><a href="/" style="color: #fff;">Back Home</a></button>
                            <h2>DANH SÁCH KHÁCH HÀNG</h2>
                            <hr>
                            {{-- <div class="line" style="text-align:right;">
                                <a href="{{URL::to('/Admin/clientAdd')}}" class="btn btn-primary">Add Student Data</a>
                            </div> --}}
                            <br>
                            <form>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Mã Khách Hàng</th>
                                            {{-- <th>Ảnh Khách Hàng</th> --}}
                                            <th>Tên Khách Hàng</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Email</th>
                                            <th>Địa Chỉ</th>
                                            <th>Ngày Đăng Ký</th>
                                            <th>Edit</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clients as $row)
                                        <tr style="background:white;">
                
                                            <td>{{ $row->MaKH }}</td>
                                            {{-- <td>
                                                <img src="{{URL::to($row->Image)}}" width="50" height="50">
                                            </td> --}}
                                            <td>{{ $row->TenKH }}</td>
                                            <td>{{ $row->SoDT }}</td>
                                            <td>{{ $row->Email }}</td>
                                            <td>{{ $row->Address }}</td>
                                            <td>{{ $row->NgayDK }}</td>
                                            <td>
                                                <a href="{{URL::to('/Admin/clientEdit/')}}/{{$row->id}}" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/Admin/clientDelete/')}}/{{$row->id}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                  </div>
                  <!-- Page-body end -->
              </div>
              <div id="styleSelector"> </div>
          </div>
      </div>
  </div>
</div>
@endsection