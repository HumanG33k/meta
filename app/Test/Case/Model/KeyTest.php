<?php
App::uses('Key', 'Model');

/**
 * Key Test Case
 *
 */
class KeyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.key',
		'app.element',
		'app.mark',
		'app.content',
		'app.attribute',
		'app.type_attributes',
		'app.attributes_element',
		'app.attributes_mark',
		'app.elements_key',
		'app.page',
		'app.elements_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Key = ClassRegistry::init('Key');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Key);

		parent::tearDown();
	}

}
