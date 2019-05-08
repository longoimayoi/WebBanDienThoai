<?php

namespace App\Http\Controllers;

use App\LoaiSP;
use Illuminate\Http\Request;
use App\SanPham;
use Cart;
use App\HoaDon;
use App\CTHD;
use Illuminate\Support\Facades\View;

class GioHangController extends Controller
{
    public function __construct()
    {
        $i=0;
        $loaisp=LoaiSP::all();
        $sanpham=SanPham::all();
        view::share(compact('loaisp','sanpham','i'));

    }
    public function GioHang($id)
    {
        $cart=Cart::getContent();
        $total=Cart::getTotal();

        return view('admin/pages/giohang',compact('cart','total'));
    }
    public function addGioHang(Request $request,$id)
    {
        $sanpham=SanPham::find($id);
        $cartinfo=[
          'id'=>$sanpham->id,
            'name'=>$sanpham->TenDT,
            'price'=>$sanpham->DonGia,
            'quantity'=>'1',
            'picture'=>$sanpham->Hinh,
        ];
        Cart::add($cartinfo);

        if(!$cartinfo)
        {
            Cart::update($sanpham->ProductID,$cartinfo);
        }

        return back()->with('success','Đã được thêm vào giỏ hàng');

    }
    public function XoaGH()
    {
        Cart::clear();
        return back();
    }
    public function ThanhToan(Request $request,$id)
    {
        $hoadon=new HoaDon();

        $hoadon->idUser=$id;
        $hoadon->TenNguoiNhan=$request->TenNN;
        $hoadon->Diachi=$request->diachi;
        $hoadon->SDT=$request->sdt;
        $hoadon->TongTien=Cart::getTotal();
        $hoadon->TrangThai=0;
        $hoadon->save();
        $cart=Cart::getContent();
        $idhoadon=$hoadon->id;
        foreach($cart as $item)
        {
            $cthd=new CTHD();
            $hd=hoadon::where('idUser',$id)->first();
            $cthd->id_HoaDon=$idhoadon;
            $cthd->id_SP=$item->id;
            $cthd->Gia=$item->price;
            $cthd->SoLuong=$item->quantity;
            $cthd->ThanhTien=$item->price*$item->quantity;
            $cthd->save();
        }

        Cart::clear();
        return back();
    }

}
