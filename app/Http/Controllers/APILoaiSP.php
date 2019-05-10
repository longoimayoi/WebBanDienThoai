<?php

namespace App\Http\Controllers;
use App\LoaiSP;
use Illuminate\Http\Request;

class APILoaiSP extends Controller
{
    public function list()
    {
        return $data=LoaiSP::all()->toJson();

    }


}
