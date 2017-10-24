<?php
/**
 * ActividadResponsableFechaFixture
 *
 */
class ActividadResponsableFechaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'actividade_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'usuario_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'fec_trabajo' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'is_fec_min' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'is_fec_max' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'fk_responsable_references_actividad' => array('column' => 'actividade_id', 'unique' => 0),
			'fk_responsable_references_usuario' => array('column' => 'usuario_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'created' => '2015-05-10 03:51:06',
			'modified' => '2015-05-10 03:51:06',
			'actividade_id' => '',
			'usuario_id' => '',
			'fec_trabajo' => '2015-05-10 03:51:06',
			'is_fec_min' => 1,
			'is_fec_max' => 1
		),
	);

}
