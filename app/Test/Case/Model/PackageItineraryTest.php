<?php
App::uses('PackageItinerary', 'Model');

/**
 * PackageItinerary Test Case
 *
 */
class PackageItineraryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.package_itinerary',
		'app.packages'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PackageItinerary = ClassRegistry::init('PackageItinerary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PackageItinerary);

		parent::tearDown();
	}

}
