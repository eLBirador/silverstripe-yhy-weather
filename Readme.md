# Silvertripe Weather Module - Yahaay Weather

[![Build Status](https://secure.travis-ci.org/eLBirador/silverstripe-yhy-weather.svg?branch=master)](https://travis-ci.org/eLBirador/silverstripe-yhy-weather)

## Introduction

The YHY Weather module allows you to post weather information on your SilverStripe Site. It includes the ability to post blogs using a site front-end form. Blogs are summarised on the blog holder page type, with more detail viewable when a specific blog is clicked.

## Maintainer Contact ##

 * Gerald Villacarlos (gerald at yahaay dot com)

## Requirements

 * Silverstripe 3.1
 * silverstripe-widgets module

## Feature Overview

*  Page weather widget

## Configuration Options

### Use WYSIWYG editing instead of bbcode

Out of the box the blog module uses bbcode, just like the forum module. If you want to go back to using the standard page editing toolbar you need to add the following code to your mysite/_config.php file

	:::php
	YhyWeather::set( "source", "forecast.oi" );
	YhyWeather::set( "apikey", "[API-KEY-HERE]" );
	YhyWeather::set( "coordinate", Array( $lat, $lng) );

## Page types

We have chosen to go with the following page types to include with the blog module:

*  BlogHolder: The BlogHolder shows BlogEntrys, and provides a way to search etc.It would also contain methods to post new blogs.

*  BlogEntry: This is simply an entry/post for the blog.


## Simple form for adding a post

There is a blog management widget, that includes a link "Post new blog entry", which takes the user to [site/CurrentBlogHolder]/post (this is a good url to bookmark if you will be using it to blog regularly). This shows a blog entry form, which requires a subject and some content at the least. Clicking "Post blog entry" takes the user back to the blog. A login form will show if the user is not logged in. The entered author name is stored in a cookie. Initially the shown name will be the user's name.

## Working with the theme

* to be implemented

## Contributing

* to be implemented

### Translations

* to be implemented