<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table="tbldienthoai";
    public function loaisp()
    {
        return $this->belongsTo('App\LoaiSP','id_LoaiSP','id');
    }
}
