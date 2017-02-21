<?php
App::uses('PackageBooking', 'Model');

/**
 * PackageBooking Test Case
 *
 */
class PackageBookingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.package_booking',
		'app.bookings'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PackageBooking = ClassRegistry::init('PackageBooking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PackageBooking);

		parent::tearDown();
	}

}
