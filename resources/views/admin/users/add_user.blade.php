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
 <form action="admin/user/add_user" method="post" enctype="multipart/form-data">
 	@csrf
    <h3 ><b>Thêm mới user</b></h3>
    <div class="form-group">
            <label>name</label>
            <input type="text" name="name" placeholder="name" class="form-control" value="" /> 
    </div>
     <div class="form-group">
            <label>email</label>
            <input type="email" name="email" placeholder="email" class="form-control" value="" /> 
    </div>
     <div class="form-group">
            <label>password</label>
            <input type="password" name="password" placeholder="password" class="form-control" value="" /> 
    </div>
     <div class="form-group">
            <label>comfirm</label>
            <input type="password" name="confirm" placeholder="confirm password" class="form-control" value="" />
    </div>
    <div class="form-group"> 
    <label>quyền hạn</label>
    <p></p>
    <input type="radio" name="quyen" checked="" value="0">Người dùng
    <input type="radio" name="quyen" value="1">Admin
    </div>
    <div class="form-group">
        <div class="submit">
            <input type="submit" class="btn btn-primary" name="btnsubmit" value="Thêm user" />
        </div> 
    </div>
</form>
</div>
@endsection