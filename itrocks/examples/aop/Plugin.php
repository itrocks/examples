<?php
namespace ITRocks\Examples\AOP;

use ITRocks\Framework\Plugin\Register;
use ITRocks\Framework\Plugin\Registerable;

/**
 * A registerable plugin with AOP
 *
 * @link https://itrocks.org/wiki/aop-weaver-before-method
 */
class Plugin implements Registerable
{

	//---------------------------------------------------------------------------------- pluginAdvice
	public function pluginAdvice()
	{
		echo '- plugin advice called ';
	}

	//------------------------------------------------------------------------------------ selfAdvice
	public static function selfAdvice()
	{
		echo '- self advice called ';
	}

	//---------------------------------------------------------------------------------- staticAdvice
	public static function staticAdvice()
	{
		echo '- static advice called ';
	}

	//-------------------------------------------------------------------------------------- register
	/**
	 * @param $register Register
	 */
	public function register(Register $register)
	{
		$register->aop->beforeMethod(
			[Example::class, 'exampleMethod'], [My_Aspect::class, 'staticAdviceMethod']
		);
		$register->aop->beforeMethod(
			[Example::class, 'exampleMethod'], [$this, 'pluginAdvice']
		);
		$register->aop->beforeMethod(
			[Example::class, 'exampleMethod'], [__CLASS__, 'selfAdvice']
		);
		$register->aop->beforeMethod(
			[Example::class, 'exampleMethod'], [get_class($this), 'staticAdvice']
		);
	}

}
