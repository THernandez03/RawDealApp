<?php
/**
 * ComboColaboradoreFixture
 *
 */
class ComboColaboradoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'primary'),
		'rut' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rut_dv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombres' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'apellido_m' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'apellido_p' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_usuario_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'flg_habilitado' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'rut' => '',
			'rut_dv' => 'Lorem ipsum dolor sit ame',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellido_m' => 'Lorem ipsum dolor sit amet',
			'apellido_p' => 'Lorem ipsum dolor sit amet',
			'tipo_usuario_id' => '',
			'created' => '2015-05-13 02:44:29',
			'modified' => '2015-05-13 02:44:29',
			'user_id' => 1,
			'flg_habilitado' => 1
		),
	);

}
