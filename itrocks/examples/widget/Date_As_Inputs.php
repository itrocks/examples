<?php
namespace ITRocks\Examples\Widget;

use ITRocks\Framework\Builder;
use ITRocks\Framework\Controller\Feature;
use ITRocks\Framework\Controller\Parameter;
use ITRocks\Framework\Tools\Date_Time;
use ITRocks\Framework\View\Html\Builder\Property;
use ITRocks\Framework\View\Html\Template;

/**
 * Widget example widget class
 */
class Date_As_Inputs extends Property
{

	//---------------------------------------------------------- Date as inputs input names constants
	const DAY   = 'day';
	const MONTH = 'month';
	const YEAR  = 'year';

	//---------------------------------------------------------------------------------------- $value
	/**
	 * @var Date_Time
	 */
	public $value;

	//------------------------------------------------------------------------------------- buildHtml
	/**
	 * Build date as inputs sub-form
	 *
	 * @return string
	 */
	public function buildHtml()
	{
		if (isset($this->parameters[Feature::F_EDIT])) {
			$value = $this->value ?: date('Y-m-d');
			$date = explode('-', substr($value, 0, 10));
			/** @var $template Template */
			$template = Builder::create(Template::class, [$this, null, Feature::F_EDIT]);
			$template->setParameters(array_merge($this->parameters, [
				'name'                 => $this->property->pathAsField(),
				self::DAY              => $date[2],
				Parameter::IS_INCLUDED => true,
				self::MONTH            => $date[1],
				self::YEAR             => $date[0]
			]));
			return $template->parse();
		}
		else {
			return $this->value;
		}
	}

	//------------------------------------------------------------------------------------ buildValue
	/**
	 * Build date with data coming from the sub-form
	 *
	 * @param $object        object
	 * @param $null_if_empty boolean
	 * @return Date_Time
	 */
	public function buildValue($object, $null_if_empty)
	{
		$date = $this->value;
		if ($null_if_empty && !($date[self::YEAR] || $date[self::MONTH] || $date[self::YEAR])) {
			return null;
		}
		return new Date_Time(
			sprintf('%04s-%02s-%02s', $date[self::YEAR], $date[self::MONTH], $date[self::DAY])
		);
	}

}
