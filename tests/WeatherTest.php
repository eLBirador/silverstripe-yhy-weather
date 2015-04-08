<?php

/**
 * @package yhy-weather
 * @subpackage tests
 */
class BlogEntryTest extends SapphireTest {
    
	/**
	* Tests that the blog entry populate defaults works
	*/
	// public function testPopulateDefaults() {
	// 	$member = $this->objFromFixture("Member", "blogOwner1");
	// 	$member->logIn();

	// 	// Create manually, as from fixture seems to create entries
	// 	// multiple times
	// 	$entry = BlogEntry::create();
	// 	$entry->Title = "Test post";
	// 	$entry->URLSegment = "test-post";
	// 	$entry->Tags = "tag1,tag2";

	// 	// We cant test by the second, as that will most likely fail
	// 	$now = date('Y-m-d', strtotime('now'));

	// 	$this->assertContains($now, $entry->Date);
	// 	$this->assertEquals($member->getName(), $entry->Author);

	// 	$member->logOut();
	// }

}