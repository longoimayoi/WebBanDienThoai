
@extends('admin.layout.index')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách chờ duyệt</h3>
                    </div>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                @endif

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Email tài khoản</th>
                                <th>Tên người nhận</th>
                                <th>Tổng tiền </th>
                                <th>Địa chỉ</th>
                                <th>SDT</th>
                                <th>Trạng thái</th>
                                <th>Ngày lập</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($choduyet as $cd)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cd->user->email}}</td>
                                    <td>{{$cd->TenNguoiNhan}}</td>
                                    <td>{{number_format($cd->TongTien,0)}} VNĐ</td>
                                    <td>{{$cd->DiaChi}}</td>
                                    <td>{{$cd->SDT}}</td>
                                    <td>@if($cd->TrangThai ==0) {{"Chờ duyệt"}} @endif</td>
                                    <td>{{$cd->created_at}}</td>
                                    <td><a href="admin/hoadon/duyet/{{$cd->id}}">Duyệt</a></td>
                                    <td><a onclick="return confirm('Bạn có muốn xóa?')" href="admin/hoadon/xoa/{{$cd->id}}">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>

                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
