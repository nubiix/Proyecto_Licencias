<?php
// Routes
/*
$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");
	//$data = array ('nombre' => $name);
    // Render index view
    return $this->view->fetch('plantillabase.twig.php', $args);
});
*/
$app->get('/', function ($request, $response, $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");
	//$data = array ('nombre' => $name);
    // Render index view
    return $this->view->fetch('login.twig.php', $args);
})->setName('login');

$app->get('/acercade', function ($request, $response, $args) {
    // Sample log message
   // $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->fetch('acercade.twig.php');
})->setName('acercade');

$app->get('/admin/subirxml', function ($request, $response, $args) {
    // Sample log message
   // $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->fetch('subirxml.twig.php');
})->setName('subirxmlget');

$app->post('/admin/subirxml', function ($request, $response, $args) use ($service){
	move_uploaded_file($_FILES['subirxml']['tmp_name'],
        "../assert/ficherosxml/temp.xml");
	$xml=simplexml_load_file("../assert/ficherosxml/temp.xml") or die("Error: Cannot create object");
	/*$array=json_decode($xml);
	print_r($array);*/
	$nombreLote = $xml->Product_Key["Name"];
	$arrayskey=array();
	foreach ($xml->Product_Key->Key as $keys) {
		$texto=(string)$keys;
		//var_dump($texto);
		array_push($arrayskey, $texto);
	}
	//print_r($arrayskey);
	$data=array('nombre'=>$nombreLote,
				'k'=>$arrayskey);
    return $this->view->fetch('xmlsubido.twig.php',$data);
})->setName('subirxmlpost');

