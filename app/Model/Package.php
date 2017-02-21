<?php
App::uses('AppModel', 'Model');
/**
 * Package Model
 *
 * @property Organizations $Organizations
 * @property PackageItinerary $PackageItinerary
 */
class Package extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Organizations' => array(
			'className' => 'Organizations',
			'foreignKey' => 'organizations_id',
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
		'PackageItinerary' => array(
			'className' => 'PackageItinerary',
			'foreignKey' => 'id',
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

}
