<?php
App::uses('AppModel', 'Model');
/**
 * Organization Model
 *
 * @property User $User
 * @property Package $Package
 */
class Organization extends AppModel {

     public $displayField = 'organization_name';
    
    
    const STATUS_ACTIVE = 0; 
    const STATUS_PENDING = 1;
    const STATUS_CANCELLED = 2;
    
    
    const ORGANIZATION_EXT = 0;
    const ORGANIZATION_TA = 1;
    const ORGANIZATION_CORP = 2; 
    
    const MR = 'MR';
    const MRS = 'MRS';
    const MS = 'MS';
    
    
   
   public function beforeSave($options = array()) {
        if (empty($this->data['Organization']['created_by']) &&
            empty($this->data['Organization']['modified_by'])) 
        {

            $this->data['Organization']['created_by'] = "artoo";

        }


        return true;
   }


    
    
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'organizations_id',
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
		'Package' => array(
			'className' => 'Package',
			'foreignKey' => 'organizations_id',
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

    
/*
 * static enum: Model::function()
 * @access static
 */
    public static function statuses($value = null) {
        $options = array(
            self::STATUS_ACTIVE => __('Active',true),
            self::STATUS_PENDING => __('Pending',true),
            self::STATUS_CANCELLED => __('Cancelled',true)
        );
        return parent::enum($value, $options);
    }

    public static function organization_types($value = null) {
        $options = array(
            self::ORGANIZATION_TA => __('Travel Agency',true),
            self::ORGANIZATION_EXT => __('External',true),
            self::ORGANIZATION_CORP=>__('Corporate', true)
        );
        return parent::enum($value, $options);
    }
    
    public static function titles($value = null) {
        $options = array(
            self::MR => __('MR.',true),
            self::MS => __('MS.',true),
            self::MRS=>__('MRS.', true)
        );
        return parent::enum($value, $options);
    }
    
    
    public static function countries($value = null){
        $options = ClassRegistry::init('Country')->getCountries();
        return parent::enum($value, $options);
    }
    
    
    
    
}
