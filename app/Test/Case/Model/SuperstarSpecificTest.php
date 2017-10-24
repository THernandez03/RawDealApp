<?php
App::uses('SuperstarSpecific', 'Model');

/**
 * SuperstarSpecific Test Case
 *
 */
class SuperstarSpecificTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.superstar_specific',
		'app.superstar',
		'app.deck',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.deck_card',
		'app.rawdeal_card_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SuperstarSpecific = ClassRegistry::init('SuperstarSpecific');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SuperstarSpecific);

		parent::tearDown();
	}

}
