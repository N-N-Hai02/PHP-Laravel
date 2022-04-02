@extends('templates.mytemplate')
@section('xemkh')
<style>
    table, th, td {
        border: 1px solid black;
    }
    h2 {
        margin: 10px;text-align:center;
    }
    .image > img {
        width: 100%;
        height: 65px;
    }
</style>
<div class="py-5">
    <h2>DANH SÁCH THÀNH VIÊN</h2>
    <table class="table container">
      <thead class="thead-dark">
        <tr>
            <th>Mã Khách Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Ngày Đăng Ký</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clients as $row)
        <tr>
            <td>{{ $row->MaKH }}</td>
            <td>{{ $row->TenKH }}</td>
            <td>{{ $row->SoDT }}</td>
            <td>{{ $row->Email }}</td>
            <td>{{ $row->Address }}</td>
            <td>{{ $row->NgayDK }}</td>                                                    
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection