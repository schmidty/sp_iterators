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

    public function testDbDoesExist()
    {
        $this->assertNotNull( $this->saladTest->getDb() );
    }

    public function testVerifyValuesInArray()
    {
        $this->assertTrue( in_array( 'cucumber', $this->saladTest->getIngredients() ) );
        $this->assertTrue( in_array( 'lettuce', $this->saladTest->getIngredients() ) );
    }
}
