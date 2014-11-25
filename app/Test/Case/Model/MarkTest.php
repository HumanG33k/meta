<?php
App::uses('Mark', 'Model');

/**
 * Mark Test Case
 *
 */
class MarkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mark',
		'app.html_type',
		'app.element',
		'app.content',
		'app.attribute',
		'app.type_attributes',
		'app.attributes_element',
		'app.attributes_mark',
		'app.key',
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
		$this->Mark = ClassRegistry::init('Mark');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mark);

		parent::tearDown();
	}

}
