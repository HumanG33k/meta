<?php
App::uses('Prefix', 'Model');

/**
 * Prefix Test Case
 *
 */
class PrefixTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prefix'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Prefix = ClassRegistry::init('Prefix');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prefix);

		parent::tearDown();
	}

}
