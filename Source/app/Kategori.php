<?php


namespace App;

use Jenssegers\Mongodb\Model as Moloquent;

class Kategori extends Moloquent {
	
	// table name
	protected $collection = "Kategori";
	
	// fields to used
	protected $fillable = [ 
			"Nama" 
	];
	
	// exclude from JSON
	protected $hidden = [ 
			"_id" 
	];
}
