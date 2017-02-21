<?php
App::uses('AppModel', 'Model');
/**
 * Journey Model
 *
 * @property FlightBookings $FlightBookings
 */
class Journey extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FlightBookings' => array(
			'className' => 'FlightBookings',
			'foreignKey' => 'flight_bookings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
