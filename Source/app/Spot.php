<?php

namespace App;

use Jenssegers\Mongodb\Model as Moloquent;

class Spot extends Moloquent {
	// table name
	protected $collection = "Spot";
	
	// fields to used
	protected $fillable = [ 
			"Nama",
			"Alamat",
			"Kontak",
			"Deskripsi",
			"Koordinat",
			"Kategori",
			"Komentar" 
	];
	
	// exclude from JSON
	protected $hidden = [ 
			"_id" 
	];
}
