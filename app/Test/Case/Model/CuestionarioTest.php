<?php
App::uses('Cuestionario', 'Model');

/**
 * Cuestionario Test Case
 *
 */
class CuestionarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuestionario',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.miembro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cuestionario = ClassRegistry::init('Cuestionario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuestionario);

		parent::tearDown();
	}

}
