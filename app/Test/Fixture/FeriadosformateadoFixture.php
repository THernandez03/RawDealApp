<?php
/**
 * FeriadosformateadoFixture
 *
 */
class FeriadosformateadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DATE_FORMAT(fecha, '%d-%m-%y')' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'DATE_FORMAT(fecha, '%d-%m-%y')' => 'Lorem '
		),
	);

}
