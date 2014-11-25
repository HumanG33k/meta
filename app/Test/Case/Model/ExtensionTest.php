<?php
App::uses('Extension', 'Model');

/**
 * Extension Test Case
 *
 */
class ExtensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.extension',
		'app.mime',
		'app.extensions_mime'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Extension = ClassRegistry::init('Extension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Extension);

		parent::tearDown();
	}

}
