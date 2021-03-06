<?php
App::uses('Forum', 'Model');

/**
 * Forum Test Case
 *
 */
class ForumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forum',
		'app.category',
		'app.news',
		'app.categories_news',
		'app.state',
		'app.thread'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Forum = ClassRegistry::init('Forum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Forum);

		parent::tearDown();
	}

}
