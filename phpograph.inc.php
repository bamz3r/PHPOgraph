<?php
/**
 * Copyright 2012 Bambang Riswanto
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

/**
 * PHPOgraph - Open Graph main Class
 * @package PHPOgraph
 * @repository http://github.com/bamz3r/PHPOgraph
 * @author Bambang Riswanto
 * @email bamz3r@gmail.com
 * @ym bamz3r@yahoo.com
 * @profile @bamz3r, http://facebook.com/bamz3r, http://www.bamz3r.tk
 * @copyright 2012 Bambang Riswanto
 */

/*

/////////////////////////////////////////////////////
// Example usage:
/////////////////////////////////////////////////////
$og = new PHPOgraph(array(
					'title' => 'Example usage Open Graph php library',
					'url' => 'http://example.org/path/to/content/',
					'image' => 'http://example.org/path/to/image/file.jpg',
					'description' => 'Hey this is sample of Open Graph php library. you can add og: tag on your site wiyh this simple library',
					'site_name' => 'Open Graph test library'
					));
echo $og->meta;
/////////////////////////////////////////////////////
// Example return:
/////////////////////////////////////////////////////
	<meta property="og:title" content="your title" />
/////////////////////////////////////////////////////
*/

// main Class
class PHPOgraph {
    /////////////////////////////////////////////////
    // Private VARIABLES
    /////////////////////////////////////////////////
	
	// Array Property of og: meta
	protected $property;
	
	// Array Content of og: meta
	protected $content;
	
    /////////////////////////////////////////////////
    // PUBLIC VARIABLES
    /////////////////////////////////////////////////
	
	// String Result meta og: tag
	var $meta;
	
	// Main construction for build all process
	// @param array $param property and content for og: meta tag.  
	// @access private
	// @return void
	public function __construct($param=null){
		if (!$param || !is_array($param)) $this->meta = 'Error';
		else {
			PHPOgraph::parse_param($param);
			PHPOgraph::build();
		}	
	}
	
	// Parsing a parameter to separate variable
	// @access private
	// @return void
	private function parse_param($param) {
		$this->property = array_keys($param);
		$this->content = array_values($param);
	}
	
	// Build a og: meta tag
	// @access public
	// @return string
	public function build() {
		$result = '';
		$property = $this->property;
		$content = $this->content;
		for ($i=0; $i<count($property); $i++) {
			$result .= '<meta property="og:' . $property[$i] . '" content="' . $content[$i] . '" />'."\n";
		}
		$this->meta = $result;
		return $result;
	}
}
?>