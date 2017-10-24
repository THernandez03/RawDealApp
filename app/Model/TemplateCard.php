<?php
App::uses('AppModel', 'Model');
/**
 * TemplateCard Model
 *
 * @property Template $Template
 * @property RawdealCardDatabase $RawdealCardDatabase
 */
class TemplateCard extends AppModel {

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
		'Template' => array(
			'className' => 'Template',
			'foreignKey' => 'template_id',
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
