<?php
App::uses('Thread', 'Model');

/**
 * Thread Test Case
 *
 */
class ThreadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.thread',
		'app.user',
		'app.group',
		'app.comment',
		'app.new',
		'app.ip',
		'app.post',
		'app.ips_user',
		'app.news',
		'app.state',
		'app.forum',
		'app.category',
		'app.categories_news',
		'app.page',
		'app.element',
		'app.mark',
		'app.html_type',
		'app.attribute',
		'app.type_attributes',
		'app.attributes_element',
		'app.attributes_mark',
		'app.content',
		'app.key',
		'app.elements_key',
		'app.elements_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Thread = ClassRegistry::init('Thread');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Thread);

		parent::tearDown();
	}

}
