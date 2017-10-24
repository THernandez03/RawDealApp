<?php
App::uses('Equipo', 'Model');

/**
 * Equipo Test Case
 *
 */
class EquipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.equipo',
		'app.tipo_equipo',
		'app.cliente',
		'app.actividade',
		'app.tipo_estado',
		'app.usuario_responsable',
		'app.usuarios_colabora',
		'app.tipo_tarea',
		'app.archivos_meconnect'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Equipo = ClassRegistry::init('Equipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Equipo);

		parent::tearDown();
	}

}
