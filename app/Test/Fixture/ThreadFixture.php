<?php
/**
 * ThreadFixture
 *
 */
class ThreadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'statut' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'nbview' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nbpost' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nbcomment' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'forum_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'forum_id' => array('column' => 'forum_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'statut' => 1,
			'nbview' => 1,
			'nbpost' => 1,
			'nbcomment' => 1,
			'created' => '2014-11-25 09:53:10',
			'updated' => '2014-11-25 09:53:10',
			'user_id' => 1,
			'forum_id' => 1
		),
	);

}
