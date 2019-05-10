<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
use App\CTHD;
use Mail;
use App\Mail\Sendmail_DuyetGH;
class HoaDonController extends Controller
{
    public function ChoDuyet()
    {
        $i=1;
        $choduyet=HoaDon::Where('Trangthai',0)->get();
        return view('admin/hoadon/choduyet',compact('choduyet','i'));
    }
    public function DaDuyet()
    {
        $i=1;
        $daduyet=HoaDon::Where('Trangthai',1)->get();
        return view('admin/hoadon/daduyet',compact('daduyet','i'));
    }
    public function Duyet($id)
    {
        $hoadon=HoaDon::find($id);
        $hoadon->TrangThai=1;
        $hoadon->save();
        $email=$hoadon->user->email;
        $subject='Shop Phương Long -- Đơn hàng '.$hoadon->id.' Đang trên đường vận chuyển';
        $message='chào '.$email.' Đơn hàng #'.$hoadon->id.' của bạn đã được đóng gói và giao cho đơn vị vận chuyển';
        Mail::to($email)->send(new Sendmail_DuyetGH($subject,$message));
        $hoadon->save();
        return back();
    }
    public function Xoa($id)
    {
        $hoadon=HoaDon::find($id);
        $cthd=CTHD::where('id_HoaDon',$id);
        $cthd->delete();
        $hoadon->delete();
        return redirect('admin/hoadon/list_choduyet')->with('thongbao','Xóa hóa đơn thành công');
    }
}
