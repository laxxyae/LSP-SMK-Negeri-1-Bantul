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
        Schema::create('detail_unit_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->boolean("opsi");
            $table->text("bukti");
            $table->unsignedBigInteger("unit_kompetensi_id");
            $table->timestamps();

            $table->foreign("unit_kompetensi_id")->references('id')->on('')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_unit_kompetensis');
    }
};
