<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaiVietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('bai_viet', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nguoi_dung_id');
        //     $table->string('ten_nguoi_dung');
        //     $table->string('tieu_de');
        //     $table->string('noi_dung', 500);
        //     $table->string('tag');
        //     $table->string('vi_tri');
        //     $table->string('hinh_anh_1')->nullable();
        //     $table->string('hinh_anh_2')->nullable();
        //     $table->string('hinh_anh_3')->nullable();
        //     $table->string('hinh_anh_4')->nullable();
        //     $table->string('hinh_anh_5')->nullable();
        //     $table->Tinyinteger('muc_do')->default('0');
        //     $table->Tinyinteger('trang_thai')->default('0');
        //     $table->SoftDeletes();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
