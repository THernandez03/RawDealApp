<?php
App::uses('RawdealCardDatabase', 'Model');

/**
 * RawdealCardDatabase Test Case
 *
 */
class RawdealCardDatabaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rawdeal_card_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RawdealCardDatabase = ClassRegistry::init('RawdealCardDatabase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RawdealCardDatabase);

		parent::tearDown();
	}

}
