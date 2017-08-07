<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateActividadeEmpresa extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'actividade_empresa', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'descricao' )->length ( 50 )->index ();
			$table->integer('area_empresa_id')->unsigned();
			$table->timestamps ();
		} );
		Schema::table ( 'actividade_empresa', function (Blueprint $table) {
			$table->foreign( 'area_empresa_id' )->references( 'id' )->on('area_empresa' );
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( 'actividade_empresa' );
	}
}
