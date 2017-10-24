<?php
App::uses('ColaboradoresSeleccionado', 'Model');

/**
 * ColaboradoresSeleccionado Test Case
 *
 */
class ColaboradoresSeleccionadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.colaboradores_seleccionado',
		'app.tipo_usuario',
		'app.usuario',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.actividad_colaboradore',
		'app.actividade',
		'app.equipo',
		'app.tipo_equipo',
		'app.cliente',
		'app.tipo_estado',
		'app.tipo_tarea',
		'app.actividad_responsable_fecha'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ColaboradoresSeleccionado = ClassRegistry::init('ColaboradoresSeleccionado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ColaboradoresSeleccionado);

		parent::tearDown();
	}

}
