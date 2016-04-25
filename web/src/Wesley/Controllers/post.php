<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$post = $app['controllers_factory'];

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

$post->get('/', function() use ($data) {
    $posts = "";
    foreach($data as $item){
        $posts .= "<a href='/post/{$item['id']}'>{$item['id']}</a>" . " - " . $item['conteudo'] . "<br>";
    }
    return $posts;
});

$post->get('/post/{id}', function($id) use ($data) {
    return $data[$id]['id'] . " - " . $data[$id]['conteudo'];
})->assert('id','\d+');

return $post;