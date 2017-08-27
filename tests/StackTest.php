<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Salad;



class StackTest extends TestCase
{
	public function testCheckForMethod()
	{
		$this->assertTrue( method_exists( new Salad( [ 'cucumber', 'lettuce' ] ), 'getIterator' ) );
	}

}
