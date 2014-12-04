<?php
App::uses('TypeAttribute', 'Model');

/**
 * TypeAttribute Test Case
 *
 */
class TypeAttributeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_attribute'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeAttribute = ClassRegistry::init('TypeAttribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeAttribute);

		parent::tearDown();
	}

}
