<?php
/**
 * ServicioSaludFixture
 *
 */
class ServicioSaludFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'servicio_salud';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'url_carta_patrocinio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url_carta_difusion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'id' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-10-23 02:20:07',
			'modified' => '2015-10-23 02:20:07',
			'url_carta_patrocinio' => 'Lorem ipsum dolor sit amet',
			'url_carta_difusion' => 'Lorem ipsum dolor sit amet'
		),
	);

}
