<?php
App::uses('State', 'Model');

/**
 * State Test Case
 *
 */
class StateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state',
		'app.forum',
		'app.category',
		'app.news',
		'app.user',
		'app.group',
		'app.comment',
		'app.new',
		'app.ip',
		'app.post',
		'app.thread',
		'app.ips_user',
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
		$this->State = ClassRegistry::init('State');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->State);

		parent::tearDown();
	}

}
