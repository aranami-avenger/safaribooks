<?php
App::uses('AppModel', 'Model');

class Credit extends AppModel {
	public $useTable = 'credit';
	
	public $primaryKey = 'ccID';
	
	public $displayField = 'ccBank';
	
	// Validation rules
	public $validate = array(
		'ccID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
			),
		),
		'ccBank' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'ccNum' => array(
			'cc' => array(
				'rule' => array('cc', array('visa', 'amex', 'disc', 'mc'), true, null),
				'message' => 'Card number should be correct.',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Card number should not be empty.',
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Card number should be unique.',
			),
		),
		'usrID' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
			),
		),
		'ccType' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Card type should not be empty.',
			),
		),
	);
	
	// belongsTo associations
	public $belongsTo = array(
		'CreditUser' => array(
			'className' => 'User',
			'foreignKey' => 'usrID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	// Check if current user is the owner.
	public function isOwner($credit, $user) {
		return $this->field('ccID', array('ccID' => $credit, 'usrID' => $user)) === $credit;
	}
}
