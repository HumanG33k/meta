<?php
App::uses('Subtype', 'Model');

/**
 * Subtype Test Case
 *
 */
class SubtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subtype',
		'app.mime',
		'app.type',
		'app.media',
		'app.extension',
		'app.extensions_mime'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subtype = ClassRegistry::init('Subtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subtype);

		parent::tearDown();
	}

}
