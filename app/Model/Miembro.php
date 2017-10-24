<?php
App::uses('AppModel', 'Model');
/**
 * Miembro Model
 *
 * @property Postulacione $Postulacione
 */
class Miembro extends AppModel {

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
		'Postulacione' => array(
			'className' => 'Postulacione',
			'foreignKey' => 'postulacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
