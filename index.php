<?php

require_once './autoload.php';
require_once './lib/Slim/Slim.php';
// Autocarga de la librería
\Slim\Slim::registerAutoloader();

// Creando una instancia del Slim
$app = new \Slim\Slim();
$app->response->header('Content-Type', 'application/json');

$app->post('/try', function() use ($app){
  // CON LIBRERIA DE SLIM
  $id = $app->request()->post('id');
  $dos =  $_POST['apellido'];
  echo 'hola mundo '.$id." ".$dos;
});

$app->post('/try2', function(){
//CON PHP PURO NATIVO DENTRO DE SLIM
  $dos =  $_POST['apellido'];
  echo 'hola mundo '.$dos;
});

$app->post('/rutax', function(){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $vo = new Prueba();
    $vo->nombre = $nombre;
    $vo->apellido = $apellido;
    $vo->direccion = $direccion;
    $vo->telefono = $telefono;

    $dao = new PruebaDAO();
    $dao->insertar($vo);

});


/*
// Servicio 1
$app->get('/productos', function(){  
	$dao = new ProductoDAO();
    $lista = $dao->listar();    
    echo json_encode($lista);    
});

// Servicio 2
$app->get('/productos/:nombre', function($nombre){   
	$dao = new ProductoDAO(); 
    $objeto = $dao->buscarPorNombre($nombre);    
    echo json_encode($objeto);    
});

// Servicio 3
$app->post('/productos', function() use ($app){  

   $idCategoria = $app->request()->post('idCategoria');
   $nombre = $app->request()->post('nombre');
   $precio = $app->request()->post('precio');
   
   $vo = new Producto();
   $vo->idCategoria = $idCategoria;
   $vo->nombre = $nombre;
   $vo->precio = $precio; 
	
   $dao = new ProductoDAO();
   $dao->insertar($vo);    
   echo json_encode(array('mensaje' => "Producto registrado satisfactoriamente"));    
});

// Servicio 4
$app->get('/categorias', function(){  
  $dao = new CategoriaDAO();
    $lista = $dao->listar();    
    echo json_encode($lista);    
});

// Servicio 5
$app->get('/categorias/:id', function($id){  
  $dao = new CategoriaDAO();
    $objeto = $dao->buscarPorID($id);    
    echo json_encode($objeto);    
});

// Servicio 6
$app->get('/usuarios', function(){  
  $dao = new UsuarioDAO();
    $lista = $dao->listar();    
    echo json_encode($lista);    
});*/

$app->run();