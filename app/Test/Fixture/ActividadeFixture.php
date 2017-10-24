<?php
/**
 * ActividadeFixture
 *
 */
class ActividadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'obervaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'equipo_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'tipo_estado_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'usuario_responsable_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'tipo_tarea_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'nro_trabajo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cliente_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'fk_actividades_references_clientes' => array('column' => 'cliente_id', 'unique' => 0),
			'fk_actividades_references_equipos' => array('column' => 'equipo_id', 'unique' => 0),
			'fk_actividades_references_tipo_estado' => array('column' => 'tipo_estado_id', 'unique' => 0),
			'fk_actividades_references_tipo_tareas' => array('column' => 'tipo_tarea_id', 'unique' => 0),
			'fk_actividades_references_usuarios' => array('column' => 'usuario_responsable_id', 'unique' => 0)
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
			'obervaciones' => 'Lorem ipsum dolor sit amet',
			'equipo_id' => '',
			'tipo_estado_id' => '',
			'created' => '2015-05-10 04:41:56',
			'modified' => '2015-05-10 04:41:56',
			'usuario_responsable_id' => '',
			'tipo_tarea_id' => '',
			'nro_trabajo' => 'Lorem ipsum dolor sit amet',
			'cliente_id' => ''
		),
	);

}
