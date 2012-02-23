<?php
/**
 * Standard Helper Functions
 *
 * @author Saurabh Kumar <saurabh@saurabhworld.in>
 */
 
 
 /**
 * Get Template
 *
 * Returns the full site path, including http://
 *
 * @param string $name, filename without .php ext
 * @param string $title, for <title> element
 * @param string $separator, for between sitename and title within <title> 
 * @return string 
 */
function get_template($name, $title='', $separator = '|') {
	ob_start();
	$title = $title .' '.$separator.' '. SITENAME;
	$file = $name . ".php";
	include($file);
	$template = ob_get_contents();
	ob_end_clean(); 
	echo $template;
}


/**
 * Get Site Path
 *
 * Returns the full site path, including http://
 *
 * @return string 
 */
function get_site_path() {
	$path_parts = pathinfo($_SERVER['PHP_SELF']);
	$path_parts = str_replace("/includes", "", $path_parts['dirname']);
	#$fullpath = "http://". $_SERVER['SERVER_NAME'] . $path_parts ."/";	
	$fullpath = "http://". $_SERVER['SERVER_NAME'] . $path_parts;
	return rtrim($fullpath, '/');
}


/**
 * Get Root Path
 *
 * @return string 
 */
function get_root_path() {
  $pos = str_replace('includes','', dirname(__FILE__));
  return $pos;
}