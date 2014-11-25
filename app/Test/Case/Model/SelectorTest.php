<?php
App::uses('Selector', 'Model');

/**
 * Selector Test Case
 *
 */
class SelectorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.selector',
		'app.css_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Selector = ClassRegistry::init('Selector');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Selector);

		parent::tearDown();
	}

}
