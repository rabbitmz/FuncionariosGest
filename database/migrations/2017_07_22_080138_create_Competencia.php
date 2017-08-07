<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCompetencia extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'competencia', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'nome' )->length ( 50 )->index ()->unique ();
			$table->integer ( 'profissao_id' )->unsigned ();
			$table->timestamps ();
		} );
		Schema::table ( 'competencia', function (Blueprint $table) {
			$table->foreign ( 'profissao_id' )->references ( 'id' )->on ( 'profissao' );
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( 'competencia' );
	}
}
