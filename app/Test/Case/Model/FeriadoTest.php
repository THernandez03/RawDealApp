<?php
App::uses('Feriado', 'Model');

/**
 * Feriado Test Case
 *
 */
class FeriadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.feriado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Feriado = ClassRegistry::init('Feriado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Feriado);

		parent::tearDown();
	}

}
