@extends('admin.layout.index')
@section('content')

    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Chi Tiết Sản Phẩm/ {{$ctsp->TenDT}}
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <br>
            <!-- //tittle heading -->
            <div class="col-md-5 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                                    <img src="upload/{{$ctsp->Hinh}}" data-imagezoom="true" class="img-responsive" alt="">

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 single-right-left simpleCart_shelfItem">

                {!! $ctsp->MoTaSP !!}
                <i class="fa fa-arrows-h"> {{$ctsp->KichThuoc}}</i>
                <p>
                    <span class="fa fa-money"><strong> {{number_format($ctsp->DonGia,0)}} VNĐ</strong></span>
                    <del>--</del>
                    <label>Free delivery--</label>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Còn
                    <label>{{$ctsp->SoLuong}}</label> Sản phẩm</p>
                </p>
                <div class="product-single-w3l">

                        <p><label class="fa fa-microchip fa-lg"> :</label> {{$ctsp->HeDieuHanh}} -- <label for="">CPU:</label> {{$ctsp->NhanCPU}}</p>
                        <p><label>RAM:</label> {{$ctsp->RAM}} -- <label for="">Bộ nhớ trong: </label>
                            {{$ctsp->ROM}} -- <label for="">Thẻ nhớ:</label> {{$ctsp->TheNho}}</p>
                         <p><label class="fa fa-mobile fa-lg"> :</label> {{$ctsp->CongNgheManHinh}}, {{$ctsp->ManHinh}}, {{$ctsp->DoPhanGiai}}</p>
                        <p><label class="fa fa-camera">:</label> {{$ctsp->CaMeRaTruoc}} <label for="" class="fa fa-video-camera"> :</label> {{$ctsp->CaMeRaSau}}</p>

                    <p>
                        <label for="" class="fa fa-battery-4 "> :</label> {{$ctsp->Pin}}

                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">

                        <form class="addtocart" method="POST" action="user/pages/addgiohang/{{$ctsp->id}}">
                            <input type="hidden" name="id" value="{{$ctsp->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-info" type="submit" href="user/pages/addgiohang/{{$ctsp->id}}">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>

                        </form>
                    </div>

                </div>

            </div>

            <div class="clearfix"> </div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#menu1">Màn hình</a></li>
                <li><a data-toggle="tab" href="#menu2">Camera</a></li>
                <li><a data-toggle="tab" href="#menu3">Phần cứng</a></li>
                <li><a data-toggle="tab" href="#menu4">Bộ nhớ & lưu trữ</a></li>
                <li><a data-toggle="tab" href="#menu5">Kết nối</a></li>
                <li><a data-toggle="tab" href="#menu6">Pin</a></li>
                <li><a data-toggle="tab" href="#menu7">Bảo hành & Orther</a></li>
            </ul>
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                <table class="table">
                    <tbody>
                    <tr >
                        <td class="success">Màn hình: </td>
                        <td>{{$ctsp->ManHinh}}</td>
                    </tr>
                    <tr>
                        <td class="success">Độ phân giải: </td>
                        <td>{{$ctsp->DoPhanGiai}}</td>
                    </tr>
                    <tr>
                        <td class="success">Công nghệ mành hình: </td>
                        <td> {{$ctsp->CongNgheManHinh}}</td>
                    </tr>
                    <tr>
                        <td class="success">Mặt kính cảm ứng: </td>
                        <td>{{$ctsp->MatKinhCamUng}}</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <table class="table">
                        <tbody>
                        <tr >
                            <td class="success">Camera trước: </td>
                            <td>{{$ctsp->CaMeRaTruoc}}</td>
                        </tr>
                        <tr>
                            <td class="success">Camera sau: </td>
                            <td> {{$ctsp->CaMeRaSau}}</td>
                        </tr>
                        <tr>
                            <td class="success">Chụp ảnh nâng cao: </td>
                            <td> {{$ctsp->ChupAnhNangCao}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="success">Chipset (hãng SX CPU): </td>
                            <td> {{$ctsp->CardCPU}}</td>
                        </tr>
                        <tr>
                            <td class="success">Tốc độ xử lý: </td>
                            <td> {{$ctsp->NhanCPU}}</td>
                        </tr>
                        <tr >
                            <td class="success">Chip đồ họa (GPU): </td>
                            <td>{{$ctsp->CardGPU}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="success">Ram: </td>
                            <td> {{$ctsp->RAM}}</td>
                        </tr>
                        <tr>
                            <td class="success">Bộ nhớ trong: </td>
                            <td> {{$ctsp->ROM}}</td>
                        </tr>
                        <tr >
                            <td class="success">Thẻ nhớ: </td>
                            <td>{{$ctsp->TheNho}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="success">Wifi: </td>
                            <td> {{$ctsp->Wifi}}</td>
                        </tr>
                        <tr>
                            <td class="success">Bluetooth: </td>
                            <td> {{$ctsp->Bluetooth}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div id="menu6" class="tab-pane fade">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="success">Pin: </td>
                            <td> {{$ctsp->Pin}}</td>
                        </tr>
                        <tr>
                            <td class="success">Loại Pin: </td>
                            <td> {{$ctsp->LoaiPin}}</td>
                        </tr>
                        <tr >
                            <td class="success">Công nghệ pin: </td>
                            <td>{{$ctsp->CNPin}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="menu7" class="tab-pane fade">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="success">Kích thước: </td>
                            <td> {{$ctsp->KichThuoc}}</td>
                        </tr>
                        <tr>
                            <td class="success">Trọng lương: </td>
                            <td> {{$ctsp->TrongLuong}}</td>
                        </tr>
                        <tr >
                            <td class="success">Màu điện thoại: </td>
                            <td>{{$ctsp->MauDT}}</td>
                        </tr>
                        <tr >
                            <td class="success">Bảo hành: </td>
                            <td>{{$ctsp->BaoHanh}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div style="text-align: center">
        {!! $ctsp->MoTaChiTiet !!}
    </div>
   <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Sản Phẩm Liên Quan
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    @foreach($sanphamlq as $lq)
                        <div class="col-md-2 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <a href="user/pages/chitietsp/{{$lq->id}}">
                                        <img style="width: 150px;height: 160px" src="upload/{{$lq->Hinh}}" alt="">
                                    </a>
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="user/pages/chitietsp/{{$lq->id}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top"></span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="user/pages/chitietsp/{{$lq->id}}">{{$lq->TenDT}}</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price"><strong>{{number_format($lq->DonGia,0)}} VNĐ</strong> </span>
                                        <del></del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">

                                        <form class="addtocart" method="POST" action="user/pages/addgiohang/{{$lq->id}}">

                                            <input type="hidden" name="id" value="{{$lq->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button style="margin-bottom: 10px" class="btn btn-info" type="submit" href="">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </button>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    {{$sanphamlq->links()}}

    <!-- //special offers -->
@endsection
@section('script')

    <script type="text/javascript">
        $(document).ready(function(){
            /*$(".addtocart button").click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var link=$(this).attr('href');
                jQuery.ajax({
                    url: link,
                    method: 'get',

                    success: function(response){
                        alert('Thêm thành công');
                    }
                });
            });*/


           $("#myBtn").on('click',function () {
               if ($("#dots").style.display === "none") {
                   $("#dots").style.display = "inline";
                   $("#myBtn").innerHTML = "Read more";
                   $("#more").style.display = "none";
               } else {
                   $("#dots").style.display = "none";
                   $("#myBtn").innerHTML = "Read less";
                   $("#more").style.display = "inline";
               }
           })


        });
    </script>
@endsection
