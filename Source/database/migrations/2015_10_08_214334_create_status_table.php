<?php
use Illuminate\Database\Migrations\Migration;
class CreateStatusTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'status' );
		// columns:
		// _id (mongo default)
		// name
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop ( 'status' );
	}
}
