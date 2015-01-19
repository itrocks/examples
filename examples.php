<?php
namespace SAF\Examples;

use SAF\Framework;
use SAF\Framework\Configuration;
use SAF\Framework\Dao;
use SAF\Framework\Dao\Mysql\Link;
use SAF\Framework\Plugin\Priority;
use SAF\Framework\Widget\Menu;

global $loc, $pwd;
require 'loc.php';
require 'pwd.php';
require 'saf.php';

$config['SAF/Examples'] = [
	Configuration::APP         => Application::class,
	Configuration::EXTENDS_APP => 'SAF/Framework',

	Priority::NORMAL => [
		Dao::class => [
			Link::DATABASE => 'saf_examples',
			Link::LOGIN    => 'saf_examples',
			Link::PASSWORD => $pwd['saf_examples']
		],
		Menu::class => [
			Menu::TITLE => ['/Bappli/Bappli/Application/home', "Home", '#main'],
			"Annotations" => [
				'/SAF/Examples/After_Write/Cars'       => "After write",
				'/SAF/Examples/Widget/Example_Classes' => "Property widget"
			],
			"Administration" => [
				'/SAF/Framework/Users'       => "Users",
				'/SAF/Framework/User/widget' => "User widget"
			]
		]
	]
];
