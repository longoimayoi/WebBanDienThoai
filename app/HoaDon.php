<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table="tblhoadon";
    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
}
