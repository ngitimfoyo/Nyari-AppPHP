<?php

namespace App;

use Jenssegers\Mongodb\Model as Moloquent;

class Pengguna extends Moloquent {
	// table name
	protected $collection = "Pengguna";
	
	// fields to used
	protected $fillable = [ 
			"Email",
			"Nama",
			"Telepon" 
	];
	
	// exclude from JSON
	protected $hidden = [ 
			"_id" 
	];
}
