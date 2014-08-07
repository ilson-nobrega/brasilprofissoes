=== BEMO A-Z Index ===
Contributors: bemoore
Donate link:  http://www.bemoore.com/bemo-a-z-index-pro/
Tags: A-Z Index, Index, Alphabetical Index, Letters Filter, A-Z filter, AZ Filter
Requires at least: 3.0.1
Tested up to: 3.9
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is a simple plugin that provides an A-Z index of the posts displayed on a particular page based on the post title.

== Description ==
This is a simple plugin that provides an A-Z index of the posts displayed on a particular page based on the post title.
To use this plugin just put the shortcode [azindex] on the page you want to display an A-Z index on.

This is very beta at the moment, it has only been tested on query_posts() so don't go mad if it doesn't work for you. Let me know though.

We have just released a pro version, more info here: http://www.bemoore.com/bemo-a-z-index-pro/.  Features are as follows:

This is a PRO version of a simple plugin that provides an A-Z index of the posts displayed on a particular page based on the post title.
To use this plugin just put the shortcode [azindex] on the page you want to display an A-Z index on.
This can then be used anywhere posts are being listed.

It also allows you to define a custom index type like this:
[azindex index="A-E,F-J,K-M,N-R,S-W,X-Z,0,1,2,3,4,5,6,7,8,9"]

If you also want to generate output, rather than filter existing posts you have to use the shortcode
[azindexoutput]

You can also define what to search, default is the first letter of the post or page title:
[azindex filter="title"] -> Filters on first letter of title
[azindex filter="content"] -> Filters on first letter of content
[azindex filter="excerpt"] -> Filters on first letter of the excerpt
[azindex filter="slug"] -> Filters on first letter of the slug

If you want to list posts from your site on a page from a specific category as well you can do so like this:
[azindex category="post-listing"]

Or for all categories :
[azindex category="*"]

There is also a built in custom post type called “A-Z Index Posts” on the admin side that you can add items to and then list on the front page as follows:
[azindex posttype="azindexcustom"]

or for a listing all custom categories:
[azindex posttype="azindexcustom" category="*"]

If you have a custom post type, you can do the following:
[azindex category="your-custom-category-name" posttype="my-post-type"]

You can also specify pagination by putting in postcount parameter which represents a number of posts to break on, e.g.
[azindex category="your-custom-category-name" posttype="my-post-type" postcount="4"]

You can create your own templates for various uses. In your theme create a folder called BEMOAZIndexPro and copy the file templates/listing.php in there. You can clone this and then specify other template names as follows:
[azindexoutput template="bibliography.php"]

There are css styles that you can override in your own template.

There are also 2 widgets, the index widget and the index output widget that replicate the functionality discussed here.

There are css styles that you can override in your own template.

I'm also available for paid support only should you need any.

== Installation ==
This plugin is installed in the standard way.

== Frequently Asked Questions ==
Coming soon.

== Screenshots ==
1. Here's a screenshot of it in action

== Changelog ==

= 0.0.6 =
* Added a link for feedback on the PRO version.

= 0.0.5 =
* Added a screenshot (again)

= 0.0.4 =
* Now works with Custom Post types
* Fix for later WP versions

= 0.0.3 =
* Added a screenshot

= 0.0.2 =
* I had added the package to the wrong place in Subversion. That's fixed now.

= 0.0.1 =
* The very first release


== Upgrade Notice ==
