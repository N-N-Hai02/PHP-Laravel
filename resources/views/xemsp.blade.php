@extends('templates.mytemplate')
@section('xemsp')
<h2>Sản Phẩm</h2>
@foreach($products as $row)
<div class="col">
    <div class="card shadow-sm">
        <img src="{{$row->Image}}">
        <div class="card-body">
            <p>{{$row->ProductName}}</p>
            <p>Giá Bán : {{$row->	Cost}}</p>
            <p>Còn {{$row->Quantity}} Sản Phẩm !!</p>
        </div>
    </div>
</div>
</table>
@endforeach
@endsection