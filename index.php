<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');
require('classes/pet.php');

session_start();

$f3 = Base::instance();

$f3->route('GET /', function () {

	$pet1 = new Pet();
	$pet1 ->eat();
	$pet1 ->talk();







	//$view = new Template();
	//echo $view->render('views/my-pets.php');
});

//Run
$f3->run();