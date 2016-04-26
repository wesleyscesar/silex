<?php 

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

$app['array'] = function(){
     $data = array(
        0 => array("id" => 1, "conteudo" => "Conteudo1"),
        1 => array("id" => 2, "conteudo" => "Conteudo2"),
        2 => array("id" => 3, "conteudo" => "Conteudo3"),
        3 => array("id" => 4, "conteudo" => "Conteudo4"),
        4 => array("id" => 5, "conteudo" => "Conteudo5"),
        5 => array("id" => 6, "conteudo" => "Conteudo6"),
        6 => array("id" => 7, "conteudo" => "Conteudo7"),
        7 => array("id" => 8, "conteudo" => "Conteudo8"),
        8 => array("id" => 9, "conteudo" => "Conteudo9"),
        9 => array("id" => 10, "conteudo" => "Conteudo10")
    );

    return $data;
};

$data = $app['array'];

$app->mount("/", include '../web/src/Wesley/Controllers/post.php');

$app->run();
