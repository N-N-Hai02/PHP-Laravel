@extends('templates.mytemplate')

@section('members')
<div class="py-5" style="width: 40%;margin-top:100pt; margin-left:auto; margin-right:auto;background-color:#eeeeee;padding:20px;">
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
    {!!Form::open(['url' => '/members/submit','files' => true])!!}
    <h3>Đăng Ký Thành Viên</h3>
    <hr>
    <div class="form-group">
        {{Form::label('matv','Mã Thành Viên')}}
        {{Form::text('memberID','',['class'=> 'form-control','placeholder' => 'nhập mã thành viên'])}}

        {{Form::label('hoten','Họ Và Tên :')}}
        {{Form::text('name','',['class'=> 'form-control','placeholder' => 'nhập vào họ và tên'])}}

        {{Form::label('sodienthoai','Số Điện Thoại :')}}
        {{Form::text('tel','',['class'=> 'form-control','placeholder' => 'nhập số điện thoại'])}}
        
        {{Form::label('email','Email :')}}
        {{Form::text('email','',['class'=> 'form-control','placeholder' => 'Email của bạn'])}}
        
        {{Form::label('diachi','Địa Chỉ :')}}
        {{Form::text('address','',['class'=> 'form-control','placeholder' => 'Nhập vào địa chỉ'])}}
    </div>
    <div class="form-group">   
        {{Form::label('hinhMB','Hình Ảnh Thành Viên :')}}
        {{Form::file('imageMember',['class'=>'form-control'])}}
    </div>  
        {{Form::submit('Gửi',['class'=> 'btn btn-warning'])}}
    {!!Form::close()!!}

</div>
@endsection