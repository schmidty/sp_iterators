<?php

require_once "vendor/autoload.php";

use App\Salad;


echo sprintf( "<!DOCTYPE html>\n<head>\n<title></title>\n<link rel='icon' type='image/x-icon' href='http://{$_SERVER['HTTP_HOST']}/desktop.ico' />\n</head>\n<body>\n" );

$greekSalad = new Salad( ['Romain lettuce', 'Onion', 'Black Olives', 'Green Bell pepper', 'Red Bell pepper', 'Tomato', 'Cucumber', 'Feta Cheese', 'Olive Oil', 'Oregano'] );

foreach( $greekSalad as $ingredient ) {
	echo sprintf( "%s<br>\n", $ingredient );
}
 

echo sprintf( "</body>\n" );
