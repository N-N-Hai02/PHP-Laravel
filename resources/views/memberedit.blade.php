@extends('templates.mytemplate')

@section('members')
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
    {!!Form::open(['url' => '/update_member/{{$members[0]->MemberID}}','files' => true])!!}
    <h3>Đăng Ký Thành Viên</h3>
    <hr>
    <div class="form-group">
        {{Form::label('matv','Mã Thành Viên')}}
        {{Form::text('memberID','',['class'=> 'form-control','placeholder' => 'nhập mã thành viên','value'="{{$members[0]->MemberID}}"])}}

        {{Form::label('hoten','Họ Và Tên :')}}
        {{Form::text('name','',['class'=> 'form-control','placeholder' => 'nhập vào họ và tên','value'="{{$members[0]->MemberName}}"])}}

        {{Form::label('sodienthoai','Số Điện Thoại :')}}
        {{Form::text('tel','',['class'=> 'form-control','placeholder' => 'nhập số điện thoại','value'="{{$members[0]->Tel}}"])}}
        
        {{Form::label('email','Email :')}}
        {{Form::text('email','',['class'=> 'form-control','placeholder' => 'Email của bạn','value'="{{$members[0]->Email}}"])}}
        
        {{Form::label('diachi','Địa Chỉ :')}}
        {{Form::text('address','',['class'=> 'form-control','placeholder' => 'Nhập vào địa chỉ','value'="{{$members[0]->Address}}"])}}
    </div>
    <div class="form-group">   
        {{Form::label('hinhMB','Hình Ảnh Thành Viên :')}}
        {{Form::file('imageMember',['class'=>'form-control','value'="{{$members[0]->ImageMembers}}"])}}
    </div>  
        {{Form::submit('Update',['class'=> 'btn btn-primary'])}}
    {!!Form::close()!!}

</div>
@endsection