<?php
App::uses('TipoTarea', 'Model');

/**
 * TipoTarea Test Case
 *
 */
class TipoTareaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_tarea',
		'app.actividade',
		'app.equipo',
		'app.tipo_equipo',
		'app.archivos_meconnect',
		'app.tipo_estado',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoTarea = ClassRegistry::init('TipoTarea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoTarea);

		parent::tearDown();
	}

}
