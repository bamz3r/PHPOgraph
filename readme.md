We have created a new repository for this project: https://github.com/bamz3r/PHPOgraph.

PHPOgraph (v.0.0.1)
==========================

This repository contains the open source PHP Library that allows you to create open grap meta (og:) tag in PHP. Except as otherwise noted, the PHPOgraph is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html)


Usage
-----

The [examples][examples] are a good place to start. The minimal you'll need to
have is:

    require 'phpograph/phpograph.inc.php';
	
	// Initializing class
	$og = new PHPOgraph(array(
						'title' => 'Example usage Open Graph php library',
						'url' => 'http://example.org/path/to/content/',
						'image' => 'http://example.org/path/to/image/file.jpg',
						'description' => 'Hey this is sample of Open Graph php library. you can add og: tag on your site wiyh this simple library',
						'site_name' => 'Open Graph test library'
						));
	//show result
	echo $og->meta;
	
[examples]: http://apps.bamz3r.tk/phpograph/examples


Contributing
===========

When commiting, keep all lines to less than 80 characters, and try to follow the existing style.

Before creating a pull request, squash your commits into a single commit.

Add the comments where needed, and provide ample explanation in the commit message.


Report Issues/Bugs
===============
[Bugs](http://apps.bamz3r.tk/phpograph/bugs)

[Questions](http://apps.bamz3r.tk/phpograph/faq)

