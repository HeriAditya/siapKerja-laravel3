<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileDaftarPKWTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_daftar_p_k_w_t_s', function (Blueprint $table) {
            $table->bigIncrements('idFileDaftar')->primary();
            $table->integer('idPKWTPerusahaan',5);
            $table->string('originalFileName',100);
            $table->string('onServerFileName',100);
            $table->integer('jenisDoc');
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
        Schema::dropIfExists('file_daftar_p_k_w_t_s');
    }
}
