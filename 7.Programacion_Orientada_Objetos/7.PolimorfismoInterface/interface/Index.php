<?php

include 'Search.php';
include 'Post.php';
include 'User.php';


$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();
