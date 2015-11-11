<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Barcode;

class BarcodeTest extends \PHPUnit_Framework_TestCase {
	private $faker;
	public function setUp() {
		$faker = new Generator ();
		$faker->addProvider ( new Barcode ( $faker ) );
		$faker->seed ( 0 );
		$this->faker = $faker;
	}
	public function testEan8() {
		$code = $this->faker->ean8 ();
		$this->assertRegExp ( '/^\d{8}$/i', $code );
		$codeWitoutChecksum = substr ( $code, 0, - 1 );
		$checksum = substr ( $code, - 1 );
		$this->assertEquals ( TestableBarcode::eanChecksum ( $codeWitoutChecksum ), $checksum );
	}
	public function testEan13() {
		$code = $this->faker->ean13 ();
		$this->assertRegExp ( '/^\d{13}$/i', $code );
		$codeWitoutChecksum = substr ( $code, 0, - 1 );
		$checksum = substr ( $code, - 1 );
		$this->assertEquals ( TestableBarcode::eanChecksum ( $codeWitoutChecksum ), $checksum );
	}
}
class TestableBarcode extends Barcode {
	public static function eanChecksum($input) {
		return parent::eanChecksum ( $input );
	}
}
