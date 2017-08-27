<?php
namespace App;


class Salad implements \IteratorAggregate
{
	protected $ingredients;


	public function __construct( array $ingredients )
	{
		$this->ingredients = $ingredients;
	}

	public function getIterator()
	{
		return new \ArrayIterator( $this->ingredients );
	}
}
