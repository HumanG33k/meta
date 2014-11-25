<?php
App::uses('CssType', 'Model');

/**
 * CssType Test Case
 *
 */
class CssTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.css_type',
		'app.selector'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CssType = ClassRegistry::init('CssType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CssType);

		parent::tearDown();
	}

}
