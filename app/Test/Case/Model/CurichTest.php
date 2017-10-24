<?php
App::uses('Curich', 'Model');

/**
 * Curich Test Case
 *
 */
class CurichTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curich'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Curich = ClassRegistry::init('Curich');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curich);

		parent::tearDown();
	}

}
