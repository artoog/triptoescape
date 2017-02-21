<?php
App::uses('BookingContact', 'Model');

/**
 * BookingContact Test Case
 *
 */
class BookingContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.booking_contact',
		'app.booking',
		'app.booking_passenger',
		'app.package_booking',
		'app.payment',
		'app.flight_booking'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BookingContact = ClassRegistry::init('BookingContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BookingContact);

		parent::tearDown();
	}

}
