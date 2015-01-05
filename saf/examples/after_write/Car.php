<?php
namespace SAF\Examples\After_Write;

use SAF\Framework\Dao\Option;

/**
 * A car business object example
 *
 * @after_write afterWriteCar
 * @after_write After_Write_Class::afterWriteCar
 * @link http://saf.re/wiki/after_write
 */
class Car
{

	//---------------------------------------------------------------------------------------- $color
	/**
	 * @var string
	 */
	public $color;

	//--------------------------------------------------------------------------------- afterWriteCar
	/**
	 * @param $options Option[]
	 */
	public function afterWriteCar($options)
	{
		// Do what you have to do after each write of a car here
		echo "Doing things inside Car" . BR;
	}

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->color . SP . "car";
	}

}
