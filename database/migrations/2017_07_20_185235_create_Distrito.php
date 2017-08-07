<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDistrito extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'distrito', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'nome' )->length ( 50 )->index ()->unique ();
			$table->integer ( 'provincia_id' )->unsigned ();
			$table->timestamps ();
		} );
		Schema::table ( 'distrito', function (Blueprint $table) {
			$table->foreign ( 'provincia_id' )->references ( 'id' )->on ( 'provincia' );
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( 'distrito' );
	}
}
