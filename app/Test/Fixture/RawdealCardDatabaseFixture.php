<?php
/**
 * RawdealCardDatabaseFixture
 *
 */
class RawdealCardDatabaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'text_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fortitude' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'damage' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'maneuver' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'reversal' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'prematch' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'event' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'title' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'midmatch' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'hybrid' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'act_unique_text' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'unique_trait' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'universal' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'specific_trait' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'superstar' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'set_edition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'text' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'backstage' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'afterburn' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ace' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'venue' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'feud' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'stipulation' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'manager' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'object' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ppv' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'stun' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'action' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'strike' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'grapple' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'submission' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'highrisk' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'trademark' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'enforcer' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'face' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'heel' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'runin' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'foreign' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'setup' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'chain' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'heat' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'bash' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'volley' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'universal_active' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'raw' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'smackdown' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ff' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cheater' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'multi' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'rms' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'permanent' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'throwback' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tag' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1)
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
			'text_type' => 'Lorem ipsum dolor sit amet',
			'fortitude' => 'L',
			'damage' => 'L',
			'maneuver' => 1,
			'reversal' => 1,
			'prematch' => 1,
			'event' => 1,
			'title' => 1,
			'midmatch' => 1,
			'hybrid' => 1,
			'act_unique_text' => 'Lorem ipsum dolor sit amet',
			'unique_trait' => 1,
			'universal' => 1,
			'specific_trait' => 1,
			'superstar' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'set_edition' => 'Lorem ipsum dolor sit amet',
			'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'backstage' => 1,
			'afterburn' => 1,
			'ace' => 1,
			'venue' => 1,
			'feud' => 1,
			'stipulation' => 1,
			'manager' => 1,
			'object' => 1,
			'ppv' => 1,
			'stun' => 1,
			'action' => 1,
			'strike' => 1,
			'grapple' => 1,
			'submission' => 1,
			'highrisk' => 1,
			'trademark' => 1,
			'enforcer' => 1,
			'face' => 1,
			'heel' => 1,
			'runin' => 1,
			'foreign' => 1,
			'setup' => 1,
			'chain' => 1,
			'heat' => 1,
			'bash' => 1,
			'volley' => 1,
			'active' => 1,
			'universal_active' => 1,
			'raw' => 1,
			'smackdown' => 1,
			'ff' => 1,
			'cheater' => 1,
			'multi' => 1,
			'rms' => 1,
			'permanent' => 1,
			'throwback' => 1,
			'tag' => 1
		),
	);

}
