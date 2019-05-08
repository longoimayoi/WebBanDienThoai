@extends('admin/layout/index')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Giỏ hàng của bạn</h3>
                    </div>
        <!-- Info boxes -->
        <div class="box-body">
            @if(count($cart) >0)
            <table class="table table-bordered table-hover">

                <thead>
                <tr>
                    <th></th>
                    <th>Số lượng</th>
                    <th>Tên điện thoại</th>
                    <th>Giá</th>
                    <th>Remove</th>
                </tr>
                </thead>

                <tbody>
                @foreach($cart as $item)
                    <tr class="rem1">
                        <td class="invert-image">

                            <a href="">
                                <img style="width: 50px" src="upload/{{$item->picture}}" alt=" " class="img-responsive">
                            </a>

                        </td>

                        <td  class="invert">
                            <div  class="quantity">
                                <div  class="quantity-select">
                                    <!-- <div class="entry value-minus">&nbsp;</div>  -->
                                    <!-- <a class="entry value-minus" href=''>  </a>  -->
                                    <a class="entry value-minus" name="tru" href="tru/{{$item->id}}"></a>
                                    <div class="entry value">
                                        <span>{{$item->quantity}}</span>
                                    </div>

                                    <!-- <div class="entry value-plus active">&nbsp;</div> -->
                                    <a class="entry value-plus active" href="cong/{{$item->id}}">  </a>
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{$item->name}}</td>
                        <td class="invert">{{number_format($item->price*$item->quantity,0)}} VNĐ</td>
                        <td class="invert">
                            <div class="rem">
                                <div ><a href="xoagiohang/{{$item->id}}" class="close3">remove</a> </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong> </strong></td>
                </tr>

                <tr>
                    <td><a href="{{ url('index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total {{ number_format($total)}} $</strong></td>
                    <td><a href="{{url('user/pages/xoagiohang')}}">Xóa Tất Cả</a></td>

                </tr>

                </tfoot>

            </table>

                    <a class="alert alert-success" style="float: right;" href="" data-toggle="modal" data-target="#myModal4">
                        <span class="fa fa-btc" aria-hidden="true"></span>Thanh toán</a>

            @else
                <p>You have no items in the shopping cart</p>
                @endif
        </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">

                        <div class="modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Điền thông tin </h3>
                            <p>

                            </p>
                            <form action="user/pages/thanhtoan/{{Auth::user()->id}}" method="post" id="formdk">
                                @csrf
                                <div class="form-group">
                                    <label>Tên người nhận</label>
                                    <input type="text" name="TenNN" placeholder="Tên người nhận" class="form-control" value="" />
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="diachi" placeholder="Địa chỉ" class="form-control" value="" />
                                </div>
                                <div class="form-group">
                                    <label>SDT</label>
                                    <input type="text" name="sdt" placeholder="Số điện thoại" class="form-control" value="" />
                                </div>

                                <input class="alert alert-info" type="submit" value="Thanh toán">

                            </form>

                        </div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
    </section>
@endsection