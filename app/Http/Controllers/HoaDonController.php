<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
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
}
