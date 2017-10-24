<?php
App::uses('ActividadColaboradore', 'Model');

/**
 * ActividadColaboradore Test Case
 *
 */
class ActividadColaboradoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividad_colaboradore',
		'app.actividade',
		'app.equipo',
		'app.tipo_equipo',
		'app.usuario',
		'app.tipo_usuario',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.actividad_responsable_fecha',
		'app.cliente',
		'app.tipo_estado',
		'app.tipo_tarea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActividadColaboradore = ClassRegistry::init('ActividadColaboradore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActividadColaboradore);

		parent::tearDown();
	}

}
