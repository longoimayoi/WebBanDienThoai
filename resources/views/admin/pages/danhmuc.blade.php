@extends('admin/layout/index')
@section('content')
    <section class="content">
        <!-- Info boxes -->
        <div class="agile info-ads-display col-md-9">

            <!-- first section (nuts) -->
            <div class="product-sec1" id="sphot">
                <h3 class="heading-tittle">Danh mục: @if(count($sanphamdm )>0) @foreach($sanphamdm as $sp)   @endforeach <strong>{{$sp->loaisp->TenLoai}}</strong> @else {{"Danh mục chưa có sản phẩm"}} @endif  </h3>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @foreach($sanphamdm as $sp)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <a href="user/pages/chitietsp/{{$sp->id}}">
                                <img style="width: 150px;height: 160px" src="upload/{{$sp->Hinh}}" alt="">
                                </a>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="user/pages/chitietsp/{{$sp->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top"></span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="user/pages/chitietsp/{{$sp->id}}">{{$sp->TenDT}}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price"><strong>{{number_format($sp->DonGia,0)}} VNĐ</strong></span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">

                                    <form class="addtocart" method="POST" action="user/pages/addgiohang/{{$sp->id}}">

                                        <input type="hidden" name="id" value="{{$sp->id}}">
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

                <div class="clearfix"></div>
            </div>

        </div>
    </section>
@endsection