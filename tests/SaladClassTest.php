<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Salad;



class SaladClassTest extends TestCase
{
    public
        $saladTest
    ;


    public function setUp()
    {
        $this->saladTest = new Salad( [ 'cucumber', 'lettuce' ] );
    }

    public function testCheckForMethod()
    {
       $this->assertTrue( method_exists( $this->saladTest, 'getIterator' ) );
    }

}
