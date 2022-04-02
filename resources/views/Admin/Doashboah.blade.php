@extends('Admin.templateAdmin.mytemplate')
    
            {{-- TopBar --}}
            
            {{-- End Topbar --}}

                    {{-- slide bar --}}
                    
                    {{-- end slidebar --}}
                {{-- quảng lý page --}}
                @section('doashboah')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Quản Trị</h5>
                                            <p class="m-b-0">Trang Quảng TRị Shop</p>
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
                        <?php 
                            // $oder = DB::table('oders')->count('*'); 
                            // $oder_new = DB::table('oders')->where('status',0)->count('*'); 
                            // $mem = DB::table('users')->count('*');            
                            $pro = DB::table('products')->count('*');            
                            $client = DB::table('clients')->count('*');            
                            $staff = DB::table('staffs')->count('*');            
                            $order = DB::table('hoadon')->count('*');
                            $Price = DB::table('products')->sum('products.Price');             
                            $TotalDanhthu = DB::table('hoadon')->sum('hoadon.TotalMoney');             
                            $TotalOnline = DB::table('hoadon')->sum('hoadon.DTOnline');             
                            $TotalOffline = DB::table('hoadon')->sum('hoadon.DTOffline');             

                        ?>
                        <!-- Page-header end -->
                          <div class="pcoded-inner-content">
                              <!-- Main-body start -->
                              <div class="main-body">
                                  <div class="page-wrapper">
                                      <!-- Page-body start -->
                                      <div class="page-body">
                                        <div class="py-2">
                                            <h5>Thống Kê Hệ Thống</h5>
                                        </div>
                                          <div class="row">
                                              
                                              <!-- task, page, download counter  start -->
                                              <div class="col-xl-3 col-md-6">
                                                  <div class="card">
                                                      <div class="card-block">
                                                          <div class="row align-items-center">
                                                              <div class="col-8">
                                                                  <h4 class="text-c-purple">{!!$staff!!}</h4>
                                                                  <h6 class="text-muted m-b-0"><b>Nhân Viên</b></h6>
                                                              </div>
                                                              <div class="col-4 text-right">
                                                                  <i class="fa fa-grav f-28"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="card-footer bg-c-purple">
                                                          <div class="row align-items-center">
                                                              <div class="col-9">
                                                                  <p class="text-white m-b-0">% Thay Đổi</p>
                                                              </div>
                                                              <div class="col-3 text-right">
                                                                  <i class="fa fa-line-chart text-white f-16"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-3 col-md-6">
                                                  <div class="card">
                                                      <div class="card-block">
                                                          <div class="row align-items-center">
                                                              <div class="col-8">
                                                                  <h4 class="text-c-green">{!!$pro!!}+</h4>
                                                                  <h6 class="text-muted m-b-0"><b>Sản Phẩm</b></h6>
                                                              </div>
                                                              <div class="col-4 text-right">
                                                                  <i class="fa fa-cart-arrow-down f-28"></i>
                                                                  
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="card-footer bg-c-green">
                                                          <div class="row align-items-center">
                                                              <div class="col-9">
                                                                  <p class="text-white m-b-0">% Thay Đổi</p>
                                                              </div>
                                                              <div class="col-3 text-right">
                                                                  <i class="fa fa-line-chart text-white f-16"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-3 col-md-6">
                                                  <div class="card">
                                                      <div class="card-block">
                                                          <div class="row align-items-center">
                                                              <div class="col-8">
                                                                  <h4 class="text-c-red">{!!$order!!}</h4>
                                                                  <h6 class="text-muted m-b-0"><b>Hóa Đơn</b></h6>
                                                              </div>
                                                              <div class="col-4 text-right">
                                                                  <i class="fa fa-file-text-o f-28"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="card-footer bg-c-red">
                                                          <div class="row align-items-center">
                                                              <div class="col-9">
                                                                  <p class="text-white m-b-0">% Thay Đổi</p>
                                                              </div>
                                                              <div class="col-3 text-right">
                                                                  <i class="fa fa-line-chart text-white f-16"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-3 col-md-6">
                                                  <div class="card">
                                                      <div class="card-block">
                                                          <div class="row align-items-center">
                                                              <div class="col-8">
                                                                  <h4 class="text-c-blue">{!!$client!!}</h4>
                                                                  <h6 class="text-muted m-b-0"><b>Khách Hàng</b></h6>
                                                              </div>
                                                              <div class="col-4 text-right">
                                                                  <i class="fa fa-user-circle-o f-28"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="card-footer bg-c-blue">
                                                          <div class="row align-items-center">
                                                              <div class="col-9">
                                                                  <p class="text-white m-b-0">% Thay Đổi</p>
                                                              </div>
                                                              <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- task, page, download counter  end -->
      
                                              <!--  sale analytics start -->
                                              <div class="col-xl-8 col-md-12">
                                                  <div class="card">
                                                      <div class="card-header">
                                                          <h5>Tổng Quang Về Cửa Hàng</h5>
                                                          <span class="text-muted">Những cập nhật thay Đổi của cửa hàng mỗi ngày trên bản đồ.</span>
                                                          <div class="card-header-right">
                                                              <ul class="list-unstyled card-option">
                                                                  <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                  <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                  <li><i class="fa fa-minus minimize-card"></i></li>
                                                                  <li><i class="fa fa-refresh reload-card"></i></li>
                                                                  <li><i class="fa fa-trash close-card"></i></li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                      <div class="card-block">
                                                          <div id="sales-analytics" style="height: 400px;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4 col-md-12">
                                                  <div class="card">
                                                      <div class="card-block">
                                                          <div class="row">
                                                              <div class="col">
                                                                  <h4>VND{!!$TotalDanhthu!!}</h4>
                                                                  <p class="text-muted">Doanh Thu Tháng Này</p>
                                                              </div>
                                                              <div class="col-auto">
                                                                  <label class="label label-success">+20%</label>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-sm-8">
                                                                  <canvas id="this-month" style="height: 150px;"></canvas>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="card quater-card">
                                                      <div class="card-block">
                                                          <h6 class="text-muted m-b-15">Thị Trường</h6>
                                                          
                                                          <h4>VNĐ {!!$Price!!}</h4>
                                                          <p class="text-muted">$3,9452.50</p>
                                                          <h5>{!!$TotalOnline!!}</h5>
                                                          <p class="text-muted">Doanh Thu Online<span class="f-right">{!!$TotalOnline!!}%</span></p>
                                                          <div class="progress"><div class="progress-bar bg-c-blue" style="width: {!!$TotalOnline!!}%"></div></div>
                                                          
                                                          <h5 class="m-t-15">{!!$TotalOffline!!}</h5>
                                                          <p class="text-muted">Doanh Thu Offline<span class="f-right">{!!$TotalOffline!!}%</span></p>
                                                          <div class="progress"><div class="progress-bar bg-c-green" style="width: {!!$TotalOffline!!}%"></div></div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--  sale analytics end -->
      
                                              <!--  project and team member start -->
                                              <div class="col-xl-8 col-md-12">
                                                  <div class="card table-card">
                                                      <div class="card-header">
                                                          <h5>Khách Hàng Mới</h5>
                                                          <div class="card-header-right">
                                                              <ul class="list-unstyled card-option">
                                                                  <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                  <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                  <li><i class="fa fa-minus minimize-card"></i></li>
                                                                  <li><i class="fa fa-refresh reload-card"></i></li>
                                                                  <li><i class="fa fa-trash close-card"></i></li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                      <div class="card-block">
                                                          <div class="table-responsive">
                                                              <table class="table table-hover">
                                                                  <thead>
                                                                  <tr>
                                                                      <th>
                                                                          <div class="chk-option">
                                                                              <div class="checkbox-fade fade-in-primary">
                                                                                  <label class="check-task">
                                                                                      <input type="checkbox" value="">
                                                                                      <span class="cr">
                                                                                              <i class="cr-icon fa fa-check txt-default"></i>
                                                                                          </span>
                                                                                  </label>
                                                                              </div>
                                                                          </div>
                                                                          Ảnh & Tên</th>
                                                                      <th>Số Điện Thoại</th>
                                                                      <th>Ngày Đăng Ký</th>
                                                                      <th class="text-right">Priority</th>
                                                                  </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                  @foreach($clients as $row)
                                                                  <tr>
                                                                      <td>
                                                                          <div class="chk-option">
                                                                              <div class="checkbox-fade fade-in-primary">
                                                                                  <label class="check-task">
                                                                                      <input type="checkbox" value="">
                                                                                      <span class="cr">
                                                                                                  <i class="cr-icon fa fa-check txt-default"></i>
                                                                                              </span>
                                                                                  </label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="d-inline-block align-middle">
                                                                              <img src="{{asset('public/backend/images/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                              <div class="d-inline-block">
                                                                                  <h6>{{ $row->TenKH }}</h6>
                                                                                  <p class="text-muted m-b-0">Graphics Designer</p>
                                                                              </div>
                                                                          </div>
                                                                      </td>
                                                                      <td>{{ $row->SoDT }}</td>
                                                                      <td>{{ $row->NgayDK }}</td>
                                                                      <td class="text-right"><label class="label label-primary">high</label></td>
                                                                  </tr>
                                                                  @endforeach
                                                                  </tbody>
                                                              </table>
                                                              <div class="text-right m-r-20">
                                                                  <a href="{{URL::to('/Admin/client')}}" class=" b-b-primary text-primary">Xem Toàn Bộ Khách Hàng</a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-4 col-md-12">
                                                  <div class="card ">
                                                      <div class="card-header">
                                                          <h5>Nhân Viên</h5>
                                                          <div class="card-header-right">
                                                              <ul class="list-unstyled card-option">
                                                                  <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                  <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                  <li><i class="fa fa-minus minimize-card"></i></li>
                                                                  <li><i class="fa fa-refresh reload-card"></i></li>
                                                                  <li><i class="fa fa-trash close-card"></i></li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                      <div class="card-block">
                                                        @foreach($staffs as $row)
                                                          <div class="align-middle m-b-30">
                                                              <img src="{{URL::to($row->Image)}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                              <div class="d-inline-block">
                                                                  <h6>{{ $row->TenNV }}</h6>
                                                                  <p class="text-muted m-b-0">Developer</p>
                                                              </div>
                                                          </div>
                                                        @endforeach
                                                          <div class="text-center">
                                                              <a href="{{URL::to('/Admin/staff')}}" class="b-b-primary text-primary">Xem Tất cả Nhân Viên</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--  project and team member end -->
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
                  
                {{-- end Pages --}}




