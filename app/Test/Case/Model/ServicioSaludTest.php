<?php
App::uses('ServicioSalud', 'Model');

/**
 * ServicioSalud Test Case
 *
 */
class ServicioSaludTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.servicio_salud',
		'app.postulacione',
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
		$this->ServicioSalud = ClassRegistry::init('ServicioSalud');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServicioSalud);

		parent::tearDown();
	}

}
