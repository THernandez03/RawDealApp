<?php
/**
 * FechasresponsableFixture
 *
 */
class FechasresponsableFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fechasresponsable';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'fecha' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'primary'),
		'actividade_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true),
		'is_escaner' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true),
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
			'fecha' => 'Lorem ip',
			'id' => '',
			'actividade_id' => '',
			'is_escaner' => 1,
			'user_id' => ''
		),
	);

}
