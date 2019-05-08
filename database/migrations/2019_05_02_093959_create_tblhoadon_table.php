<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblhoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblhoadon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idUser');
            $table->dateTime('NgayLap');
            $table->integer('TongTien');
            $table->string('TenNguoiNhan',60);
            $table->string('DiaChi',60);
            $table->string('SDT',10);
            $table->integer('TrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblhoadon');
    }
}
