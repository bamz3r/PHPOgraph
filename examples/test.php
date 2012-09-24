<?
require('../phpograph.inc.php');
$og = new PHPOgraph(array(
					'title' => 'Example usage Open Graph php library',
					'url' => 'http://example.org/path/to/content/',
					'image' => 'http://example.org/path/to/image/file.jpg',
					'description' => 'Hey this is sample of Open Graph php library. you can add og: tag on your site wiyh this simple library',
					'site_name' => 'Open Graph test library'
					));
?><!DOCTYPE html>
<html>
<head>
<title>PHP Open Graph</title>
<? echo $og->meta; ?>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<img src="../images/phpograph.png" />
<h1>PHPOGraph - PHP Open Graph library</h1>
<hr>
<h2>Example</h2>
<h4>Code Usage:</h4>
<pre>
<?
$str = "<?
require('../phpograph.inc.php');\n"
.'$og'." = new PHPOgraph(array(
	'title' => 'Example usage Open Graph php library',
	'url' => 'http://example.org/path/to/content/',
	'image' => 'http://example.org/path/to/image/file.jpg',
	'description' => 'Hey this is sample of Open Graph php library.',
	'site_name' => 'Open Graph test library'
	));
?>";
echo htmlentities($str);
?>
</pre>
<h4>Result:</h4>
<pre>
<?
echo htmlentities('<meta property="og:title" content="Example usage Open Graph php library" />
<meta property="og:url" content="http://example.org/path/to/content/" />
<meta property="og:image" content="http://example.org/path/to/image/file.jpg" />
<meta property="og:description" content="Hey this is sample of Open Graph php library." />
<meta property="og:site_name" content="Open Graph test library" />');
?>
</pre>

<h2>Documentation</h2>
for complete documentation please visit http://github.com/bamz3r/phpograph/wiki

<h2>Credits</h2>
<ul>
<li>Bambang Riswanto<br>
	<ul>
		<li><a target="_blank" href="http://github.com/bamz3r">http://github.com/bamz3r</a></li>
		<li><a target="_blank" href="http://twitter.com/bamz3r">@bamz3r</a></li>
		<li><a target="_blank" href="http://facebook.com/bamz3r">http://facebook.com/bamz3r</a>	</li>
	</ul>
</li>
</ul>
<hr>
&copy; 2012 Bambang Riswanto http://www.bamz3r.tk
</body>
</html>