<?php
namespace SAF\Examples\After_Write;

use SAF\Framework\Dao\Option;

/**
 * This class stores things done after writes calls
 *
 * @link http://saf.re/wiki/after_write
 */
class After_Write_Class
{

	//--------------------------------------------------------------------------------- afterWriteCar
	/**
	 * @param $car     Car
	 * @param $options Option[]
	 */
	public static function afterWriteCar(Car $car, $options)
	{
		// Do what you have to do after each write of a car here
		echo "Doing things outside Car" . BR;
	}

}
