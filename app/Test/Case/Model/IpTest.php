<?php
App::uses('Ip', 'Model');

/**
 * Ip Test Case
 *
 */
class IpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ip',
		'app.comment',
		'app.user',
		'app.group',
		'app.news',
		'app.post',
		'app.thread',
		'app.ips_user',
		'app.new'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ip = ClassRegistry::init('Ip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ip);

		parent::tearDown();
	}

}
