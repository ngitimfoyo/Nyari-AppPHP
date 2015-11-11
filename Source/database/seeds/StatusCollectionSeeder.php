<?php
use Illuminate\Database\Seeder;
use App\Status;
class StatusCollectionSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'status' )->delete ();
		
		Status::create ( array (
				"name" => "Aktif" 
		) );
		
		Status::create ( array (
				"name" => "Non Aktif" 
		) );
	}
}
