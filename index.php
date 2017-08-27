<?php

require_once "vendor/autoload.php";

use App\Salad;


$greekSalad = new Salad( ['Romain lettuce', 'Onion', 'Black Olives', 'Green Bell pepper', 'Red Bell pepper', 'Tomato', 'Cucumber', 'Feta Cheese', 'Olive Oil', 'Oregano'] );

foreach( $greekSalad as $ingredient ) {
	echo sprintf( "%s<br>\n", $ingredient );
}
 
