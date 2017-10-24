<?php
App::uses('Modulo', 'Model');

/**
 * Modulo Test Case
 *
 */
class ModuloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modulo',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Modulo = ClassRegistry::init('Modulo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modulo);

		parent::tearDown();
	}

}
