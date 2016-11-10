<?php
namespace ITRocks\Examples\Widget;

use ITRocks\Framework\Tools\Date_Time;

/**
 * Widget example stored data class
 *
 * @stored
 */
class Example_Class
{

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var Date_Time
	 * @widget Date_As_Inputs
	 */
	public $birth_date;

	/**
	 * @return string
	 */
	public function __toString()
	{
		return strval($this->name);
	}

}
