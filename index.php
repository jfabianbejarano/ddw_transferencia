<?php
include __DIR__ . '/vendor/autoload.php';

$pagina = $_REQUEST['p'] ?? 'inicio';
$params = [
	'menuItems' => [
		(object) ['pag'=>'acercade', 'txt'=> 'Acerca de', 'icon'=>'fa-solid fa-user-tag'],
		(object) ['pag'=>'proyectos','txt'=> 'Proyectos', 'icon'=>'fa-solid fa-diagram-project'],
		(object) ['pag'=>'contacto', 'txt'=> 'Contacto' , 'icon'=>'fa-solid fa-address-card'],
	],
];

$latte = new Latte\Engine;
$latte->setTempDirectory(__DIR__ . '/tempdir');
$latte->render(__DIR__ . "/pags/$pagina.latte", $params);