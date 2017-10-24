<?php
App::uses('DeckCard', 'Model');

/**
 * DeckCard Test Case
 *
 */
class DeckCardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deck_card',
		'app.deck',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.rawdeal_card_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeckCard = ClassRegistry::init('DeckCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeckCard);

		parent::tearDown();
	}

}
