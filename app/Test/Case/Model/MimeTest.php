<?php
App::uses('Mime', 'Model');

/**
 * Mime Test Case
 *
 */
class MimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mime',
		'app.type',
		'app.subtype',
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
		$this->Mime = ClassRegistry::init('Mime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mime);

		parent::tearDown();
	}

}
