<?php
App::uses('CardType', 'Model');

/**
 * CardType Test Case
 *
 */
class CardTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.card_type',
		'app.template',
		'app.template_card',
		'app.rawdeal_card_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CardType = ClassRegistry::init('CardType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardType);

		parent::tearDown();
	}

}
