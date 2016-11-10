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
		Menu::class => [
			Menu::TITLE => ['/Bappli/Bappli/Application/home', 'Home', '#main'],
			'Annotations' => [
				'/ITRocks/Examples/After_Write/Cars'       => 'After write',
				'/ITRocks/Examples/Widget/Example_Classes' => 'Property widget'
			],
			'Administration' => [
				'/ITRocks/Framework/Users'               => 'Users',
				'/ITRocks/Framework/User/widget'         => 'User widget',
				'/ITRocks/Framework/Locale/Translations' => 'Translations'
			]
		]
	]
];
