<?php
App::uses('Cliente', 'Model');

/**
 * Cliente Test Case
 *
 */
class ClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente',
		'app.actividade',
		'app.equipo',
		'app.tipo_equipo',
		'app.usuario',
		'app.tipo_usuario',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
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
		$this->Cliente = ClassRegistry::init('Cliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cliente);

		parent::tearDown();
	}

}
