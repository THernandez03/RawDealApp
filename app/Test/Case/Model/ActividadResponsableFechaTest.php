<?php
App::uses('ActividadResponsableFecha', 'Model');

/**
 * ActividadResponsableFecha Test Case
 *
 */
class ActividadResponsableFechaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividad_responsable_fecha',
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
		$this->ActividadResponsableFecha = ClassRegistry::init('ActividadResponsableFecha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActividadResponsableFecha);

		parent::tearDown();
	}

}
