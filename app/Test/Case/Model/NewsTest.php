<?php
App::uses('News', 'Model');

/**
 * News Test Case
 *
 */
class NewsTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.news',
		'app.user',
		'app.group',
		'app.comment',
		'app.new',
		'app.ip',
		'app.post',
		'app.ips_user',
		'app.thread',
		'app.state',
		'app.category',
		'app.forum',
		'app.categories_news'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->News = ClassRegistry::init('News');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->News);

		parent::tearDown();
	}

}
