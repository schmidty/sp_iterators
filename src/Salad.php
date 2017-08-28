<?php
namespace App;

use Symfony\Component\Yaml\Parser;


class Salad implements \IteratorAggregate
{
	protected
		$db,

		$ingredients,

		$yaml
	;


	public function __construct( array $ingredients )
	{
		$this->yaml = new Parser();
		$this->getMySQLDbConnection();

		$this->ingredients = $ingredients;
	}

	private function getDbConfigFile()
	{
		if ( !file_exists( 'database.yml' ) ) {
			throw new \Exception('database config not found');
		}
		return $this->yaml->parse( file_get_contents( 'database.yml' ) );
	}

	private function getMySQLDbConnection()
	{
		$yaml = $this->getDbConfigFile()['mysql'];
		$this->db = new \PDO('mysql:host='. $yaml['dbhost'] .';dbname='. $yaml['dbname'], $yaml['dbuser'], $yaml['dbpass']);
	}

	public function getDb()
	{
		return $this->db;
	}

	public function getIterator()
	{
		return new \ArrayIterator( $this->ingredients );
	}

	public function getIngredients()
	{
		return $this->ingredients;
	}
}
