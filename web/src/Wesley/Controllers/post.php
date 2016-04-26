<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$post = $app['controllers_factory'];

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