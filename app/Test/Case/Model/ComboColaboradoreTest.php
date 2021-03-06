<?php
App::uses('ComboColaboradore', 'Model');

/**
 * ComboColaboradore Test Case
 *
 */
class ComboColaboradoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.combo_colaboradore',
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
		$this->ComboColaboradore = ClassRegistry::init('ComboColaboradore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComboColaboradore);

		parent::tearDown();
	}

}
