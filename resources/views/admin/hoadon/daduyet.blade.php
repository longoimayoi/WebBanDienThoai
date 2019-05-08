
@extends('admin.layout.index')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách đã duyệt</h3>
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

                            @foreach($daduyet as $dd)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$dd->user->email}}</td>
                                    <td>{{$dd->TenNguoiNhan}}</td>
                                    <td>{{number_format($dd->TongTien,0)}} VNĐ</td>
                                    <td>{{$dd->DiaChi}}</td>
                                    <td>{{$dd->SDT}}</td>
                                    <td>@if($dd->TrangThai ==1) {{"Đã duyệt"}} @endif</td>
                                    <td>{{$dd->created_at}}</td>

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
