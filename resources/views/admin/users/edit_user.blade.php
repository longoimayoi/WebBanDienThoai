@extends('admin.layout.index')
@section('content')
<div class="container">
    @if(count($errors) >0)
        @foreach($errors->all() as $er)
            <div class="alert alert-danger">
                {{$er}}
            </div>
        @endforeach
    @endif
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
 <form method="post" enctype="multipart/form-data" action="admin/user/edit_user/{{$user->id}}">
 	@csrf
    <h3 ><b>Edit user {{$user->email}}</b></h3>
    <div class="form-group">
            <label>name</label>
            <input type="text" name="name" placeholder="name" class="form-control" value="{{$user->name}}" />
    </div>
     <div class="form-group">
            <label>email</label>
            <input type="email" name="email" placeholder="email" class="form-control" value="{{$user->email}}" disabled />
    </div>
     <div class="form-group">
            <label>password</label>
            <input type="password" name="password" placeholder="password" class="form-control" value="{{$user->password}}" />
    </div>
     <div class="form-group">
            <label>comfirm</label>
            <input type="password" name="confirm" placeholder="confirm password" class="form-control" value="{{$user->password}}" />
    </div>
    <div class="form-group"> 
    <label>quyền hạn</label>
    <p></p>
    @if($user->role==0)
    <input type="radio" name="quyen" checked="" value="0">Người dùng
    <input type="radio" name="quyen" value="1">Admin
    @else
     <input type="radio" name="quyen"  value="0">Người dùng
     <input type="radio" name="quyen" checked="" value="1">Admin
        @endif
    </div>
    <div class="form-group">
        <div class="submit">
            <input type="submit" class="btn btn-primary" name="btnsubmit" value="Save" />
        </div> 
    </div>
</form>
</div>
@endsection