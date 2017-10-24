<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'tunotici',
		'password' => 'Beto@015',
		'database' => 'tunotici_plataforma_innovasalud',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '11.44.1.18',
		'login' => 'tunotici@localhost',
		'password' => '',
		'database' => 'tunotici_redmundo',
	);
	public $talleres = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => '',
		'database' => 'talleres',
	);
}
