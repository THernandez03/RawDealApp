<?php
App::uses('TipoEstado', 'Model');

/**
 * TipoEstado Test Case
 *
 */
class TipoEstadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_estado',
		'app.actividade',
		'app.equipo',
		'app.tipo_equipo',
		'app.archivos_meconnect',
		'app.usuario',
		'app.tipo_tarea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoEstado = ClassRegistry::init('TipoEstado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoEstado);

		parent::tearDown();
	}

}
