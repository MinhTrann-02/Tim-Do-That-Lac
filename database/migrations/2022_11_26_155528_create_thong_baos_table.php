<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongBaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_bao', function (Blueprint $table) {
            $table->id();
            $table->integer('nguoi_nhan_id');
            $table->integer('bai_viet_id');
            $table->string('tieu_de');
            $table->string('noi_dung');
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
        Schema::dropIfExists('thong_baos');
    }
}
