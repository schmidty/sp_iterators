<?php
namespace App;


class Salad
{
	protected $ingredients;


	public function __construct( array $ingredients )
	{
		$this->ingredients = $ingredients;
	}

	public function getIngredients()
	{
		return $this->ingredients;
	}
}
