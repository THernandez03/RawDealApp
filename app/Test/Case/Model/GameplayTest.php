<?php
App::uses('Gameplay', 'Model');

/**
 * Gameplay Test Case
 *
 */
class GameplayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gameplay',
		'app.user1',
		'app.user2',
		'app.deck1',
		'app.deck2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gameplay = ClassRegistry::init('Gameplay');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gameplay);

		parent::tearDown();
	}

}
