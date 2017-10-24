<?php
App::uses('Fechasresponsable', 'Model');

/**
 * Fechasresponsable Test Case
 *
 */
class FechasresponsableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fechasresponsable'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fechasresponsable = ClassRegistry::init('Fechasresponsable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fechasresponsable);

		parent::tearDown();
	}

}
