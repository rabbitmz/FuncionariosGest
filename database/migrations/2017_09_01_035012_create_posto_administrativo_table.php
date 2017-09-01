<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostoAdministrativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create ( 'posto_administrativo', function (Blueprint $table) {
        $table->increments ( 'id' );
        $table->string ( 'nome' )->length ( 50 )->index ()->unique ();
        $table->integer ( 'distrito_id' )->unsigned ();
        $table->timestamps ();
      } );
      Schema::table ( 'posto_administrativo', function (Blueprint $table) {
        $table->foreign ( 'distrito_id' )->references ( 'id' )->on ( 'distrito' );
      } );    
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posto_administrativo');
    }
}
