@extends('templates.mytemplate')

@section('register')
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

<div style="width: 40%; margin-left: auto; margin-right:auto;background-color:#eeeeee;padding:20px;">
    {!!Form::open(['url' => '/register_valid/submit'])!!}
    <h3>Đăng Ký Thành Viên</h3>
    <hr>
    <div class="form-group">
        {{Form::label('hoten','Họ Và Tên :')}}
        {{Form::text('name','',['class'=> 'form-control','placeholder' => 'nhập vào họ và tên'])}}

        {{Form::label('sodienthoai','Số Điện Thoại :')}}
        {{Form::text('tel','',['class'=> 'form-control','placeholder' => 'nhập số điện thoại'])}}
        
        {{Form::label('email','Email :')}}
        {{Form::text('email','',['class'=> 'form-control','placeholder' => 'Email của bạn'])}}
        
        {{Form::label('diachi','Địa Chỉ :')}}
        {{Form::text('address','',['class'=> 'form-control','placeholder' => 'Nhập vào địa chỉ'])}}
        
        {{Form::submit('Gửi',['class'=> 'btn btn-danger'])}}
    {!!Form::close()!!}
    </div>
</div>
@endsection