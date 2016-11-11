<?php
namespace ITRocks\Examples;

use ITRocks\Framework\Configuration;
use ITRocks\Framework\Plugin\Priority;
use ITRocks\Framework\Widget\Menu;

require __DIR__ . '/../framework/config.php';

$config['ITRocks/Examples'] = [
	Configuration::APP         => Application::class,
	Configuration::EXTENDS_APP => 'ITRocks/Framework',

	Priority::NORMAL => [
		AOP\Plugin::class,
		Menu::class => [
			Menu::TITLE => ['/Bappli/Bappli/Application/home', 'Home', '#main'],
			'Annotations' => [
				'/ITRocks/Examples/After_Write/Cars'       => 'After write',
				'/ITRocks/Examples/Widget/Example_Classes' => 'Property widget'
			],
			'AOP' => [
				'/ITRocks/Examples/AOP/Example/exampleMethod' => 'Call exampleMethod()'
			],
			'HMVCP' => [
				'/ITRocks/Examples/Clients' => 'Clients',
			],
			'Administration' => [
				'/ITRocks/Framework/Users'               => 'Users',
				'/ITRocks/Framework/User/widget'         => 'User widget',
				'/ITRocks/Framework/Locale/Translations' => 'Translations'
			]
		]
	]
];
