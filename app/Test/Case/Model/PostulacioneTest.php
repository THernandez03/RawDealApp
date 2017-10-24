<?php
App::uses('Postulacione', 'Model');

/**
 * Postulacione Test Case
 *
 */
class PostulacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.postulacione',
		'app.servicio_salud',
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
		$this->Postulacione = ClassRegistry::init('Postulacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Postulacione);

		parent::tearDown();
	}

}
