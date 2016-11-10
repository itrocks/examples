<?php
namespace ITRocks\Examples\Widget\Lite;

/**
 * Property widget lite example class
 *
 * @stored
 */
class Example_Class
{

	//----------------------------------------------------------------------------------------- $name
	/**
	 * @var string
	 */
	public $name;

	//------------------------------------------------------------------------------------- $nickname
	/**
	 * @var string
	 * @widget Strong_String
	 */
	public $nickname;

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->name . ($this->nickname ? (' (' . $this->nickname . ')') : '');
	}

}
