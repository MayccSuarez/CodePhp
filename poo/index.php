<?php

require 'Author.php';
require 'Post.php';

$maycc = new Author("Maycc", "Suárez");

$post = new Post($maycc, "Pq programar!!!", "Pq es divertido");

echo "Titulo: $post->title <br>";
echo "Contenido: $post->body <br>";
echo "Autor: {$post->author->name}<br>";

echo '<pre>';
var_dump($post);