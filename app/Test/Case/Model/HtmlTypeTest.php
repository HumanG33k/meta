<?php
App::uses('HtmlType', 'Model');

/**
 * HtmlType Test Case
 *
 */
class HtmlTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.html_type',
		'app.mark'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HtmlType = ClassRegistry::init('HtmlType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HtmlType);

		parent::tearDown();
	}

}
