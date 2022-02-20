<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rab', function (Blueprint $table) {

            $table->id();
            $table->string('no');
            $table->string('uraian_pekerjaan');
            $table->enum('satuan',['Ls','Pkt','M3','Kg','Bh','Unit']);
            $table->string('volume');
            $table->string('harga_satuan');
            $table->BigInteger('jumlah');
            $table->string('foto');
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
        Schema::dropIfExists('rab');
    }
};
