<?php
App::uses('Deck', 'Model');

/**
 * Deck Test Case
 *
 */
class DeckTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deck',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.superstar',
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
		$this->Deck = ClassRegistry::init('Deck');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Deck);

		parent::tearDown();
	}

}
