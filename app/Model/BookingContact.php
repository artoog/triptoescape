<?php
App::uses('AppModel', 'Model');
/**
 * BookingContact Model
 *
 * @property Booking $Booking
 */
class BookingContact extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Booking' => array(
			'className' => 'Booking',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
