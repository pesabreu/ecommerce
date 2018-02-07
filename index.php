<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "Ecommerce Pesabreu WMS <br /><br />";
	
	$sql = new pesabreu\DB\Sql();
	
	$res = $sql->select("SELECT * FROM tb_users");
	
	echo json_encode($res);

});

$app->run();

 ?>