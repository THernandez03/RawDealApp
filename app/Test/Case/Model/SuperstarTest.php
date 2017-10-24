<?php
App::uses('Superstar', 'Model');

/**
 * Superstar Test Case
 *
 */
class SuperstarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Superstar = ClassRegistry::init('Superstar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Superstar);

		parent::tearDown();
	}

}
