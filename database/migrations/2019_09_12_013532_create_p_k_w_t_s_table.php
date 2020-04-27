<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePKWTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_k_w_t_s', function (Blueprint $table) {
            $table->bigIncrements('idPKWTPerusahaan')->primary();
            $table->integer('idPerusahaan',5);
            $table->string('namaPKWT',200);
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
        Schema::dropIfExists('p_k_w_t_s');
    }
}
