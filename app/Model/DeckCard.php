<?php
App::uses('AppModel', 'Model');
/**
 * DeckCard Model
 *
 * @property Deck $Deck
 * @property RawdealCardDatabase $RawdealCardDatabase
 */
class DeckCard extends AppModel {

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
		'Deck' => array(
			'className' => 'Deck',
			'foreignKey' => 'deck_id',
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
