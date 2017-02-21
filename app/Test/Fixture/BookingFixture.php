<?php
/**
 * BookingFixture
 *
 */
class BookingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'booking_reference' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'adt_cnt' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'chd_cnt' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'inf_cnt' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'booking_contacts_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'booking_contacts_id'), 'unique' => 1),
			'booking_reference_UNIQUE' => array('column' => 'booking_reference', 'unique' => 1),
			'fk_bookings_booking_contacts1_idx' => array('column' => 'booking_contacts_id', 'unique' => 0)
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
			'booking_reference' => 'Lorem ip',
			'adt_cnt' => 1,
			'chd_cnt' => 1,
			'inf_cnt' => 1,
			'created' => '2017-01-24 15:05:16',
			'created_by' => 'Lorem ip',
			'modified' => '2017-01-24 15:05:16',
			'modified_by' => 'Lorem ip',
			'booking_contacts_id' => 1
		),
	);

}
