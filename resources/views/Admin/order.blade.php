@extends('Admin.templateAdmin.mytemplate')

@section('orders')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Quảng lý Hóa Đơn</h5>
                        <p class="m-b-0">Hello orders các bạn</p>
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
                            <h2>DANH SÁCH HÓA ĐƠN</h2>
                            <hr>
                            <div class="line" style="text-align:right;">
                                {{-- <a href="/studentadd" class="btn btn-primary">Add Student Data</a> --}}
                            </div>
                            <br>
                            <form>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Số Hóa Đơn</th>
                                            <th>Ngày Nhập HD</th>
                                            <th>Mã Khách Hàng</th>
                                            <th>Mã Sản Phẩm</th>
                                            <th>Số Lượng</th>
                                            <th>Tỏng Tiền</th>
                                            <th>DT Online</th>
                                            <th>DT Offline</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($hoadon as $row)
                                        <tr style="background:white;">
                                            
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->SoHD }}</td>
                                            <td>{{ $row->NgayNhapHD }}</td>
                                            <td>{{ $row->MaKH }}</td>
                                            <td>{{ $row->ProductID }}</td>
                                            <td>{{ $row->Quantity }}</td>
                                            <td>{{ $row->TotalMoney}} VNĐ</td>
                                            <td>{{ $row->DTOnline}}%</td>
                                            <td>{{ $row->DTOffline}}%</td>
                                            <td>
                                                <a href="{{URL::to('/Admin/ordersDelete/')}}/{{$row->SoHD}}" class="btn btn-danger">Delete</a>
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