@extends('templates.mytemplate')

@section('invoices')


<div class="py-5" style="width: 80%;margin-top:100pt; margin-left: auto; margin-right:auto;background-color:#eeeeee;padding:20px;">
    {{-- {!!Form::open(['url' => '/invoices/submit'])!!}
    <h3 style="color:red;text-align:center;"><b>Chọn Sản Phẩm Bạn Muốn Mua</b></h3>
    <hr>
    <div class="form-group">
        {{Form::label('sohd','Số Hóa Đơn')}}
        {{Form::text('invoicesID','',['class'=> 'form-control','placeholder' => 'nhập Số Hóa Đơn'])}}

        {{Form::label('ngayhd','Ngày Hóa Đơn:')}}
        {{Form::date('dateInvoices',new \DateTime(),['class' => 'form-control'])}}

        {{Form::label('matv','Mã Thành Viên:')}}
        {{Form::select('memberID',$dstv,'',['class'=> 'form-control'])}}
        
        {{Form::label('masp','Mã Sản Phẩm :')}}
        {{Form::select('productID',$dssp,'',['class'=> 'form-control'])}}

        {{Form::submit('Gửi',['class'=> 'btn btn-success'])}}
    {!!Form::close()!!}
    </div> --}}

    <form action="{{URL::to('/invoices/submit')}}" method="post">
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
            @if (isset($message))
                <div class="alert alert-success">
                    {{$message}}
                </div>
            @endif
            <div class="jumbotron" style="margin-top:5%;">
                <h3 style="color:red;text-align:center;"><b>Phẩm Vào Danh Sách Hóa Đơn FAKE</b></h3>
                <hr>
                <div class="form-group">
                    <label>Số Hóa Đơn</label>
                    <input type="text" class="form-control" name="invoicesID" placeholder="Enter client code">
                </div>
                <div class="form-group">
                    <label>Ngày Hóa Đơn:</label>
                    <input type="date" new \DateTime() class="form-control" name="dateInvoices" placeholder="Enter client name">
                </div>
                <div class="form-group">
                    <label>Mã Thành Viên:</label>
                    <select class="form-control" name="memberID">
                        <option selected disabled>--No select--</option>
                        <option value="MK1">Mã KH 1</option>
                        <option value="MK2">Mã KH 2</option>
                        <option value="MK3">Mã KH 3</option>
                        <option value="MK4">Mã KH 4</option>
                        <option value="MK5">Mã KH 5</option>
                        <option value="MK6">Mã KH 6</option>
                        <option value="MK7">Mã KH 7</option>
                        <option value="MK8">Mã KH 8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mã Sản Phẩm :</label>
                    <select class="form-control" name="productID">
                        <option selected disabled>--No select--</option>
                        <option value="01">Sản Phẩm1</option>
                        <option value="02">Sản Phẩm2</option>
                        <option value="03">Sản Phẩm3</option>
                        <option value="04">Sản Phẩm4</option>
                        <option value="05">Sản Phẩm5</option>
                        <option value="06">Sản Phẩm6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tổng Tiền</label>
                    <input type="text" class="form-control" name="totalM" placeholder="Enter client code">
                </div>
                <div class="form-group">
                    <label>Doanh Thu Online</label>
                    <select class="form-control" name="doanhthuOnline">
                        <option selected disabled>--No select--</option>
                        <option value="10">Doanh Thu One</option>
                        <option value="20">Doanh Thu Two</option>
                        <option value="20">Doanh Thu Three</option>
                        <option value="30">Doanh Thu four</option>
                        <option value="40">Doanh Thu five</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Doanh Thu Offline</label>
                    <select class="form-control" name="doanhthuOffline">
                        <option selected disabled>--No select--</option>
                        <option value="10">Doanh Thu One</option>
                        <option value="20">Doanh Thu Two</option>
                        <option value="20">Doanh Thu Three</option>
                        <option value="30">Doanh Thu four</option>
                        <option value="40">Doanh Thu five</option>
                    </select>
                </div>
                <input type="submit" name="submit" class="btn btn-success" value="Thêm Hóa Đơn" />
                <a href="{{URL::to('/xemkh')}}" class="btn btn-primary">Back To View</a>
            </div>
        </div>
    </form>
</div>
@endsection