@extends('templates.mytemplate')

@section('khachhang')
<div class="py-5" style="width: 60%;margin-top:100pt; margin-left:auto; margin-right:auto;background-color:#eeeeee;padding:20px;">
    <form action="{{URL::to('/Admin/client_Save')}}" method="post" enctype="multipart/form-data">
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
                <h1>Đăng Ký Khách Hàng</h1>
                <hr>
                <div class="form-group">
                    <label>Mã Khách Hàng</label>
                    <input type="text" class="form-control" name="client_ma" placeholder="Enter client code">
                </div>
                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" class="form-control" name="client_ten" placeholder="Enter client name">
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="text" class="form-control" name="client_sdt" placeholder="Enter client number">
                </div>
                <div class="form-group">
                    <label>Email Khách hàng</label>
                    <input type="text" class="form-control" name="client_email" placeholder="Enter client email">
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control" name="client_address" placeholder="Enter client Address">
                </div>
                <div class="form-group">
                    <label>Ảnh Khách</label>
                    <input type="file" class="form-control" name="client_image">
                </div>
                <input type="submit" name="submit" class="btn btn-success" value="Thêm Khách Hàng" />
                <a href="{{URL::to('/xemkh')}}" class="btn btn-primary">Back To View</a>
            </div>
        </div>
    </form>

</div>
@endsection