<?php
App::uses('Miembro', 'Model');

/**
 * Miembro Test Case
 *
 */
class MiembroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.miembro',
		'app.postulacione',
		'app.servicio_salud',
		'app.cuestionario',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Miembro = ClassRegistry::init('Miembro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Miembro);

		parent::tearDown();
	}

}
