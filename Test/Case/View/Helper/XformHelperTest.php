<?php
App::uses('View', 'View');
App::uses('Helper', 'View');
App::uses('XformHelper', 'Xform.View/Helper');

/**
 * XformHelper Test Case
 *
 */
class XformHelperTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$View = new View();
		$this->Xform = new XformHelper($View);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Xform);

		parent::tearDown();
	}

/**
 * testCheckConfirmScreen method
 *
 * @return void
 */
	public function testCheckConfirmScreen() {
	}

/**
 * testGetConfirmInput method
 *
 * @return void
 */
	public function testGetConfirmInput() {
	}

/**
 * testGetConfirmDatetime method
 *
 * @return void
 */
	public function testGetConfirmDatetime() {
	}

}
