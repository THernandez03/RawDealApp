<?php
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuario',
		'app.tipo_usuario',
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
		$this->Usuario = ClassRegistry::init('Usuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usuario);

		parent::tearDown();
	}

}
