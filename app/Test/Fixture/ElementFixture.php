<?php
/**
 * ElementFixture
 *
 */
class ElementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'mark_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'content_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'position' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'element_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'mark_id' => array('column' => array('mark_id', 'content_id'), 'unique' => 0),
			'content_id' => array('column' => 'content_id', 'unique' => 0),
			'mark_id_2' => array('column' => array('mark_id', 'content_id'), 'unique' => 0),
			'element_id' => array('column' => 'element_id', 'unique' => 0)
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
			'mark_id' => 1,
			'content_id' => 1,
			'name' => 1,
			'created' => '2014-11-24 14:26:12',
			'updated' => '2014-11-24 14:26:12',
			'position' => 1,
			'description' => 1,
			'element_id' => 1
		),
	);

}
