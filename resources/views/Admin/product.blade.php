@extends('Admin.templateAdmin.mytemplate')

@section('products')
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
                    <div class="container">
                        @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <h4>{{ \Session::get('success') }}</h4>
                        </div>
                        @endif
                        <div class="jumbotron">
                            <button class="btn btn-secondary"><a href="/" style="color: #fff;">Back Home</a></button>
                            <h2>DANH SÁCH SẢN PHẨM</h2>
                            <hr>
                            <div class="line" style="text-align:right;">
                                <a href="{{URL::to('/Admin/productAdd')}}" class="btn btn-primary">Add Sản Phẩm</a>
                            </div>
                            <br>
                            <form>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Ảnh Sản Phẩm</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Miêu tả</th>
                                            <th>Số Lượng</th>
                                            <th>Giá Bán</th>
                                            <th>Edit</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($products as $row)
                                        <tr style="background:white;">
                
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{URL::to($row->Image)}}" width="50" height="50">
                                            </td>
                                            <td>{{ $row->ProductName }}</td>
                                            <td>{{ $row->Mota }}</td>
                                            <td>{{ $row->Quantity }}</td>
                                            <td>{{ $row->Price }}</td>
                                            <td>
                                                <a href="{{URL::to('/Admin/productEdit/')}}/{{$row->id}}" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/Admin/productDelete/')}}/{{$row->id}}" class="btn btn-danger">Delete</a>
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