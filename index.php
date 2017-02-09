<?php
error_reporting(E_ALL);

// namespace and autoloaders
use Ridvanbaluyos\Face\FaceDetection as FaceDetection;
require_once __DIR__ . '/vendor/autoload.php';

// let's use Justin Bieber's photo
$image = array(
	'url' => 'http://img2.timeinc.net/people/i/2014/database/140831/justin-bieber-300.jpg',
);

// detect face
$face = new FaceDetection($image);

// face only
$face->getFaces();

// analyze all
//$face->analyzeAll()->getFaces();

// analyze chaining
//$face->analyzeFaceLandmarks()->analyzeFaceAttributes()->getFaces();

// analyze face attributes
//$face->analyzeFaceAttributes()->getFaces();

// analyze face landmarks
//$face->analyzeFaceLandmarks()->getFaces();