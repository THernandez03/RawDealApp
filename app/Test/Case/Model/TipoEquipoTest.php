<?php
App::uses('TipoEquipo', 'Model');

/**
 * TipoEquipo Test Case
 *
 */
class TipoEquipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_equipo',
		'app.equipo',
		'app.actividade',
		'app.tipo_estado',
		'app.usuario',
		'app.tipo_tarea',
		'app.archivos_meconnect'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoEquipo = ClassRegistry::init('TipoEquipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoEquipo);

		parent::tearDown();
	}

}
