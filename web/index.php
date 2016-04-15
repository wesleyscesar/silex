<?php 

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$data = array(
    0 => array("id" => 1, "conteudo" => "Conteudo - 1"),
    1 => array("id" => 2, "conteudo" => "Conteudo - 2"),
    2 => array("id" => 3, "conteudo" => "Conteudo - 3"),
    3 => array("id" => 4, "conteudo" => "Conteudo - 4"),
    4 => array("id" => 5, "conteudo" => "Conteudo - 5"),
    5 => array("id" => 6, "conteudo" => "Conteudo - 6"),
    6 => array("id" => 7, "conteudo" => "Conteudo - 7"),
    7 => array("id" => 8, "conteudo" => "Conteudo - 8"),
    8 => array("id" => 9, "conteudo" => "Conteudo - 9"),
    9 => array("id" => 10, "conteudo" => "Conteudo - 10")
);

$app->get('/posts/{id}', function($id) use($data){
    return $data[$id]['id'] . " - " . $data[$id]['conteudo'];
})->assert('id','\d+');

$app->run();
