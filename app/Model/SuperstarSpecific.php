<?php
App::uses('AppModel', 'Model');
/**
 * SuperstarSpecific Model
 *
 * @property Superstar $Superstar
 * @property RawdealCardDatabase $RawdealCardDatabase
 */
class SuperstarSpecific extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Superstar' => array(
			'className' => 'Superstar',
			'foreignKey' => 'superstar_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RawdealCardDatabase' => array(
			'className' => 'RawdealCardDatabase',
			'foreignKey' => 'rawdeal_card_database_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
