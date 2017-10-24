<?php
App::uses('AppModel', 'Model');
/**
 * Modulo Model
 *
 * @property Menu $Menu
 */
class Modulo extends AppModel {

 public $displayField = 'gls_modulos';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Menu' => array(
			'className' => 'Menu',
			'foreignKey' => 'modulo_id',
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
