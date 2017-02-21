<?php
App::uses('AppModel', 'Model');
/**
 * Booking Model
 *
 * @property BookingContact $BookingContact
 * @property BookingPassenger $BookingPassenger
 * @property PackageBooking $PackageBooking
 * @property Payment $Payment
 * @property FlightBooking $FlightBooking
 */
class Booking extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'BookingContact' => array(
			'className' => 'BookingContact',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BookingPassenger' => array(
			'className' => 'BookingPassenger',
			'foreignKey' => 'bookings_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PackageBooking' => array(
			'className' => 'PackageBooking',
			'foreignKey' => 'bookings_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Payment' => array(
			'className' => 'Payment',
			'foreignKey' => 'bookings_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'FlightBooking' => array(
			'className' => 'FlightBooking',
			'foreignKey' => 'bookings_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    
    public function CalculateBookingTotal($booking = null){
        
        
        
    }
}
