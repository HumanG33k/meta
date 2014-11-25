<?php
App::uses('Element', 'Model');

/**
 * Element Test Case
 *
 */
class ElementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.element',
		'app.mark',
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
		$this->Element = ClassRegistry::init('Element');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Element);

		parent::tearDown();
	}

}
