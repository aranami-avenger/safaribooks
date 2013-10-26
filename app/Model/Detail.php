<?php
App::uses('AppModel', 'Model');

class Detail extends AppModel {
	public $useTable = 'detail';
	
	public $primaryKey = 'cmnID';
	
	public $displayField = 'cmnFname';
	
	// Validation rules
	public $validate = array(
		'cmnID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnFname' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w ñ\.]+/'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnLname' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w ñ\.]+/'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnSuffix' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w ñ\.]+/'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnAddress' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w ñ\.]+/'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnPhone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnRole' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'cmnStat' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
	);
	
	// hasOne associations
	public $hasOne = array(
		'DetailCustomer' => array(
			'className' => 'Customer',
			'foreignKey' => 'cmnID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DetailEmployee' => array(
			'className' => 'Employee',
			'foreignKey' => 'cmnID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
