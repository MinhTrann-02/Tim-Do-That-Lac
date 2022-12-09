<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tai_khoan', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('ho_ten');
        //     $table->integer('so_dien_thoai');
        //     $table->string('email');
        //     $table->string('ten_dang_nhap');
        //     $table->string('mat_khau');
        //     $table->string('avatar')->nullable();
        //     /* 
        //     adm:
        //     1 = adm;
        //     0 = user;
        //     status
        //     0 = user normal
        //     1 = VIP
        //     */
        //     $table->Tinyinteger('adm')->default('0');
        //     $table->Tinyinteger('status')->default('0');
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
        Schema::dropIfExists('tai_khoans');
    }
}
