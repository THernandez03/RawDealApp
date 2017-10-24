<?php
App::uses('TipoUsuario', 'Model');

/**
 * TipoUsuario Test Case
 *
 */
class TipoUsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_usuario',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoUsuario = ClassRegistry::init('TipoUsuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoUsuario);

		parent::tearDown();
	}

}
