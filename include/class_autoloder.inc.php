<?php

spl_autoload_register( 'class_autoloader');

function class_autoloader ( $className ) {
	
	$path = 'classes/';
	
	$extension = '.class.php';
	
	$fullPath = $path . $className . $extension ;
	
	require_once $fullPath;
}






