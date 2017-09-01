<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProfessional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('professional', function (Blueprint $table) {
        $table->integer('posto_administrativo_id')->unsigned();
          });

        //
        Schema::table('professional', function(Blueprint $table) {
            $table->foreign('posto_administrativo_id')->references('id')->on('posto_administrativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('professional');
    }
}
