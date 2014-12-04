<?php
App::uses('Attribute', 'Model');

/**
 * Attribute Test Case
 *
 */
class AttributeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attribute',
		'app.type_attributes',
		'app.element',
		'app.mark',
		'app.html_type',
		'app.attributes_mark',
		'app.content',
		'app.attributes_element',
		'app.key',
		'app.elements_key',
		'app.page',
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
		'app.elements_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attribute = ClassRegistry::init('Attribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attribute);

		parent::tearDown();
	}

}
