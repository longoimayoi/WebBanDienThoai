<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\SanPham;
use App\LoaiSP;
use Illuminate\Support\collection;
use Cart;
use function Sodium\compare;

class PagesController extends Controller
{
    public function __construct()
    {
        $i=0;

        $loaisp=LoaiSP::all();
        $sanpham=SanPham::all();
        view::share(compact('loaisp','sanpham','i'));

    }
    public  function index()
    {
        $cart=Cart::getContent();
        $total=Cart::getTotal();
        return view('admin/pages/index',compact('cart','total'));
    }
    public function DanhMuc($id)
    {
        $cart=Cart::getContent();
        $total=Cart::getTotal();
        $sanphamdm=SanPham::where('id_LoaiSP',$id)->get();
        return view('admin/pages/danhmuc',compact('sanphamdm','cart','total'));
    }
    public function ChiTietSP($id)
    {
        $cart=Cart::getContent();
        $total=Cart::getTotal();
        $ctsp=SanPham::find($id);
        $sanphamlq=SanPham::where('id_LoaiSP',$ctsp->id_LoaiSP)->where('id','<>',$id)->paginate(10);
        return view('admin/pages/chitietsp',compact('ctsp','sanphamlq','cart','total'));
    }
    public function TimKiem(Request $request)
    {
        $cart=Cart::getContent();
        $total=Cart::getTotal();
        $keyword=$request->keyword;

        $timsp=SanPham::where('TenDT','like','%'.$keyword.'%')->orwhere('DonGia' ,'<=',$keyword)->get();
        return view('admin/pages/timkiem',compact('timsp','keyword','cart','total'));
    }
    public function TimKiemGia($id)
    {

        if($id=='duoi25tr')
        {
            $a='Dưới 25 triệu';
            $sp25=SanPham::where('DonGia','<=',25000000)->get();
        }
        elseif($id=='duoi5tr')
        {
            $a='Dưới 5 triệu';
            $sp25=SanPham::where('DonGia','<',5000000)->get();
        }
        elseif($id=='tren25tr')
        {
            $a='Trên 25 triệu';
            $sp25=SanPham::where('DonGia','>',25000000)->get();
        }
        $cart=Cart::getContent();
        $total=Cart::getTotal();


        return view('admin/pages/timkiemgia',compact('sp25','cart','total','a'));
    }

}
