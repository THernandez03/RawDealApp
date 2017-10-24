<?php
App::uses('TemplateCard', 'Model');

/**
 * TemplateCard Test Case
 *
 */
class TemplateCardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.template_card',
		'app.template',
		'app.rawdeal_card_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TemplateCard = ClassRegistry::init('TemplateCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TemplateCard);

		parent::tearDown();
	}

}
