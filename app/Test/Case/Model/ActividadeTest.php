<?php
App::uses('Actividade', 'Model');

/**
 * Actividade Test Case
 *
 */
class ActividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividade',
		'app.equipo',
		'app.tipo_equipo',
		'app.usuario',
		'app.tipo_usuario',
		'app.user',
		'app.role',
		'app.menu',
		'app.modulo',
		'app.actividad_colaboradore',
		'app.actividad_responsable_fecha',
		'app.tipo_estado',
		'app.tipo_tarea',
		'app.cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actividade = ClassRegistry::init('Actividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actividade);

		parent::tearDown();
	}

}
