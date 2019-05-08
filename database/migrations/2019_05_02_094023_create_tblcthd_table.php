<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcthdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcthd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_SP');
            $table->integer('id_HoaDon');
            $table->integer('Gia');
            $table->integer('SoLuong');
            $table->integer('ThanhTien');
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
        Schema::dropIfExists('tblcthd');
    }
}
