<?php

/**
 * @package yhy-weather
 * @subpackage tests
 */
class WeatherTest extends SapphireTest {
	static $fixture_file = 'yhy-weather/tests/WeatherTest.yml';

	public function setUp() {
		parent::setUp();
		
		//Do not display deprecated errors etc.
		ini_set('display_errors', 1);
		ini_set("log_errors", 1);
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	}
    
	/**
	* Tests that the blog entry populate defaults works
	*/
	// public function testPopulateDefaults() {
	// 	$member = $this->objFromFixture("Member", "blogOwner1");
	// 	$member->logIn();

	// 	$condition = true;
	// 	// $this->assertEquals( true, $condition );
	// 	$member->logOut();
	// }

}