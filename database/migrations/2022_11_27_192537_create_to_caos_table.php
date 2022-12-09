<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToCaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_cao', function (Blueprint $table) {
            $table->id();
            $table->integer('nguoi_to_cao_id');
            $table->integer('bai_viet_to_cao_id');
            $table->string('tieu_de');
            $table->string('noi_dung');
            $table->SoftDeletes();
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
        Schema::dropIfExists('to_caos');
    }
}
