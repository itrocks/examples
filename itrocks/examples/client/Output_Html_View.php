<?php
namespace ITRocks\Examples\Client;

use ITRocks\Examples\Client;
use ITRocks\Examples\Programmer\Top_Quotes;
use ITRocks\Framework\Builder;
use ITRocks\Framework\View\Html\Default_View;

/**
 * Client output HTML view
 *
 * @link https://itrocks.org/wiki/creer-une-vue
 */
class Output_Html_View extends Default_View
{

	//------------------------------------------------------------------------------------------- run
	/**
	 * @param $parameters   array
	 * @param $form         array
	 * @param $files        array
	 * @param $class_name   string
	 * @param $feature_name string
	 * @return mixed
	 */
	public function run($parameters, $form, $files, $class_name, $feature_name)
	{
		// always output client name uppercase, but it stays stored as it was typed in by the operator
		// add a random citation to the client name (look at the output template)
		$client_class = Builder::className(Client::class);
		if (isset($parameters[$client_class])) {
			/** @var $client Client */
			$client = $parameters[$client_class];
			$client->name = strtoupper($client->name);
			$parameters['quote'] = (new Top_Quotes)->random();
		}
		return parent::run($parameters, $form, $files, $class_name, $feature_name);
	}

}
