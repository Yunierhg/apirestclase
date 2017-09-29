<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function () {
   
header('Content-Type: application/json');

    //la conexion a la bd
    echo json_encode(array(

        'aula'=>223,
        'profesor'=>'Nombre de profesor',
        'asignatura'=>'Programacion',
        'alumnos'=>array(
            'alumnos nombre 1',
            'alumnos nombre 2',
            'alumnos nombre 3',
            'alumnos nombre 4',
            'alumnos nombre 5',
            'alumnos nombre 6'
        )
    ));

});


$app->get('/hello/{name}/{apellidos}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $apellidos = $request->getAttribute('apellidos');
    $response->getBody()->write("Hello, $name, $apellidos");

   
});

$app->run();