<?php


namespace App\Http\Controllers;

use App\Kategori;
use Request;

class KategoriController extends Controller {
	
	/*
	 * Show home page of Status
	 */
	public function index() {
		$items = Kategori::latest ()->get ();
		return $items;
	}
	
	/*
	 * View page for create new Status
	 */
	public function store() {
		Kategori::create ( Request::all () );
		return response ()->json ( array (
				'success' => true 
		) );
	}
}
