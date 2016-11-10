<?php
namespace ITRocks\Examples\After_Write;

use ITRocks\Framework\Dao\Option;

/**
 * This class stores things done after writes calls
 *
 * @link https://itrocks.org/wiki/after_write
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
		echo 'Doing things outside Car' . BR;
	}

}
