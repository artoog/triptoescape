<?php
App::uses('FlightBooking', 'Model');

/**
 * FlightBooking Test Case
 *
 */
class FlightBookingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.flight_booking',
		'app.bookings',
		'app.journey'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FlightBooking = ClassRegistry::init('FlightBooking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FlightBooking);

		parent::tearDown();
	}

}
