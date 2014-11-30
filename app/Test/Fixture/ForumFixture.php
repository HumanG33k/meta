<?php
/**
 * ForumFixture
 *
 */
class ForumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'position' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'nbpost' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nbtread' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'state_id' => array('column' => 'state_id', 'unique' => 1),
			'categorie_id' => array('column' => 'category_id', 'unique' => 0),
			'category_id' => array('column' => 'category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'position' => 1,
			'nbpost' => 1,
			'nbtread' => 1,
			'category_id' => 1,
			'state_id' => 1,
			'created' => '2014-11-24 14:43:18',
			'updated' => '2014-11-24 14:43:18'
		),
	);

}
