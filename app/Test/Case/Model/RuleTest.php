<?php
App::uses('Rule', 'Model');

/**
 * Rule Test Case
 *
 */
class RuleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rule',
		'app.prefixe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rule = ClassRegistry::init('Rule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rule);

		parent::tearDown();
	}

}
