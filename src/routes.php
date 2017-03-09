<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    //pagina principal/login
    return $this->view->fetch('login.twig.php', $args);
})->setName('login');

$app->get('/acercade', function ($request, $response, $args) {
    //ruta acerca de
    return $this->view->fetch('acercade.twig.php');
})->setName('acercade');

$app->get('/admin/subirxml', function ($request, $response, $args) {
    //ruta get de subir xml
    return $this->view->fetch('subirxml.twig.php');
})->setName('subirxmlget');

$app->post('/admin/subirxml', function ($request, $response, $args) use ($service, $model){
	//cargamos el fichero xml y lo procesamos 
    move_uploaded_file($_FILES['subirxml']['tmp_name'],"../assert/ficherosxml/temp.xml");
	$xml=simplexml_load_file("../assert/ficherosxml/temp.xml") or die("Error: Cannot create object");
    //
	$nombreLote = $xml->Product_Key["Name"];
	$arrayKeys=array();
	foreach ($xml->Product_Key->Key as $keys) {
		$texto=(string)$keys;
		array_push($arrayKeys, $texto);
	}
    //llamada modelo para insertar claves
	$model->insertar_claves($nombreLote, $arrayKeys);
    //guardando en data las claves para pasarlas a la vista
	$data=array('nombre'=>$nombreLote,'keys'=>$arrayKeys);
    return $this->view->fetch('xmlsubido.twig.php',$data);
})->setName('subirxmlpost');

$app->get('/admin/subirusuarios', function ($request, $response, $args) {
    //ruta get de subir usuarios
    return $this->view->fetch('subirusuarios.twig.php');
})->setName('subirusuariosget');
