<?php
App::uses('AppModel', 'Model');
/**
 * PackageItinerary Model
 *
 * @property Packages $Packages
 */
class PackageItinerary extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Packages' => array(
			'className' => 'Packages',
			'foreignKey' => 'packages_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
