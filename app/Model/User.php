<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Organizations $Organizations
 * @property Groups $Groups
 * @property role $role
 */
class User extends AppModel {


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
		),
		'Groups' => array(
			'className' => 'Groups',
			'foreignKey' => 'groups_id',
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
		'role' => array(
			'className' => 'role',
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
