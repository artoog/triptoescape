<?php
App::uses('CurrencyConverter', 'Model');

/**
 * CurrencyConverter Test Case
 *
 */
class CurrencyConverterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.currency_converter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CurrencyConverter = ClassRegistry::init('CurrencyConverter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CurrencyConverter);

		parent::tearDown();
	}

}
