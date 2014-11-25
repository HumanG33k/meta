<?php
App::uses('PseudoElement', 'Model');

/**
 * PseudoElement Test Case
 *
 */
class PseudoElementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pseudo_element',
		'app.prefixe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PseudoElement = ClassRegistry::init('PseudoElement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PseudoElement);

		parent::tearDown();
	}

}
