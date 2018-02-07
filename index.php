<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \pesabreu\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "Ecommerce Pesabreu WMS <br /><br />";	
	/*$sql = new pesabreu\DB\Sql();	
	$res = $sql->select("SELECT * FROM tb_users");	
	echo json_encode($res);*/

	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>