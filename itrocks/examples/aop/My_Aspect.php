<?php
namespace ITRocks\Examples\AOP;

/**
 * Aspect class, containing advices, example
 *
 * @link https://itrocks.org/wiki/aop-weaver-before-method
 */
class My_Aspect
{

	//---------------------------------------------------------------------------- staticAdviceMethod
	public static function staticAdviceMethod()
	{
		echo '- static advice method called ';
	}

}
