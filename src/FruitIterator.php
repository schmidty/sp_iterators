<?php
namespace App;


class FruitIterator extends FilterIterator
{
	protected $acceptedFruits = [ 'apple', 'orange' ];


	public function accept()
	{
		return in_array( $this->getInnerIterator()->current(), $this->acceptedFruits );

	}

}

