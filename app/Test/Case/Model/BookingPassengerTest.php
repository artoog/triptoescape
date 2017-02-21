<?php
App::uses('BookingPassenger', 'Model');

/**
 * BookingPassenger Test Case
 *
 */
class BookingPassengerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.booking_passenger',
		'app.bookings'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BookingPassenger = ClassRegistry::init('BookingPassenger');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BookingPassenger);

		parent::tearDown();
	}

}
