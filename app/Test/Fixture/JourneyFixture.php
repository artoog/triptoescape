<?php
/**
 * JourneyFixture
 *
 */
class JourneyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'flight_bookings_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dep_station' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dep_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'arr_station' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'arr_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dep_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'arr_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'flight_bookings_id'), 'unique' => 1),
			'fk_Journeys_flight_bookings_idx' => array('column' => 'flight_bookings_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'flight_bookings_id' => 1,
			'dep_station' => 'Lorem ipsum dolor sit amet',
			'dep_code' => 'Lorem ipsum dolor sit amet',
			'arr_station' => 'Lorem ipsum dolor sit amet',
			'arr_code' => 'Lorem ipsum dolor sit amet',
			'dep_time' => '2017-01-24 15:22:06',
			'arr_time' => '2017-01-24 15:22:06',
			'created' => '2017-01-24 15:22:06',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'modified' => '2017-01-24 15:22:06',
			'modified_by' => 'Lorem ipsum dolor sit amet'
		),
	);

}
