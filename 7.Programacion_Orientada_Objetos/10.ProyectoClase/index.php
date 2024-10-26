<?php

require __DIR__ . '/vendor/autoload.php';

use App\Post;
use App\Comment;

$post = new Post();

$comment1 = new Comment('Hola');
$comment2 = new Comment('Hola');
$comment3 = new Comment('Hola');

$post->addComment($comment1);
$post->addComment($comment2);
$post->addComment($comment3);

$comments = $post->getComments();

$total_comments = count( $comments );

echo "la cantidad de comentarios es: $total_comments";
echo "<hr>";

$countForInstance = $post->countComments();
echo "Cantidad de comentarios por Instancia de la función: ". $countForInstance;
echo "<hr>";

print_r($post->getComments());