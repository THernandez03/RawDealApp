<?php
App::uses('AppModel', 'Model');
/**
 * Gameplay Model
 *
 * @property User1 $User1
 * @property User2 $User2
 * @property Deck1 $Deck1
 * @property Deck2 $Deck2
 */
class Gameplay extends AppModel {

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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user1_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Deck' => array(
			'className' => 'Deck',
			'foreignKey' => 'deck1_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Deck' => array(
			'className' => 'Deck',
			'foreignKey' => 'deck2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
