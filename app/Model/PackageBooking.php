<?php
App::uses('AppModel', 'Model');
/**
 * PackageBooking Model
 *
 * @property Bookings $Bookings
 */
class PackageBooking extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bookings' => array(
			'className' => 'Bookings',
			'foreignKey' => 'bookings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
