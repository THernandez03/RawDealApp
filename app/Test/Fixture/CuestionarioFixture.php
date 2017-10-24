<?php
/**
 * CuestionarioFixture
 *
 */
class CuestionarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'servicio_salud_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'area_dpto_unidad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'is_patrocinada' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'is_asociacion_func' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'fec_ini' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'fec_fin' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'is_vigente' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'motivo_no_vigente' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_mejora_calidad' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'is_mejora_eficiencia' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'problematica' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'situacion_previa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'objetivos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'situacion_posterior' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'beneficios' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mecanismo_medicion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'resultados_indicador' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'costos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hallazgos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'exito' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lecciones_aprendidas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'fk_cuestionarios_ref_users' => array('column' => 'user_id', 'unique' => 0),
			'fk_cuestionario_ref_servicio_salud' => array('column' => 'servicio_salud_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'name' => 'Lorem ipsum dolor sit amet',
			'servicio_salud_id' => '',
			'area_dpto_unidad' => 'Lorem ipsum dolor sit amet',
			'user_id' => '',
			'is_patrocinada' => '',
			'is_asociacion_func' => '',
			'fec_ini' => '2015-09-13 03:52:00',
			'fec_fin' => '2015-09-13 03:52:00',
			'created' => '2015-09-13 03:52:00',
			'modified' => '2015-09-13 03:52:00',
			'is_vigente' => '',
			'motivo_no_vigente' => 'Lorem ipsum dolor sit amet',
			'is_mejora_calidad' => '',
			'is_mejora_eficiencia' => '',
			'problematica' => 'Lorem ipsum dolor sit amet',
			'situacion_previa' => 'Lorem ipsum dolor sit amet',
			'objetivos' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'situacion_posterior' => 'Lorem ipsum dolor sit amet',
			'beneficios' => 'Lorem ipsum dolor sit amet',
			'mecanismo_medicion' => 'Lorem ipsum dolor sit amet',
			'resultados_indicador' => 'Lorem ipsum dolor sit amet',
			'costos' => 'Lorem ipsum dolor sit amet',
			'hallazgos' => 'Lorem ipsum dolor sit amet',
			'exito' => 'Lorem ipsum dolor sit amet',
			'lecciones_aprendidas' => 'Lorem ipsum dolor sit amet'
		),
	);

}
