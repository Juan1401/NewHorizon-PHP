<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments()); //Validación -> Se creo u Post?
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]); //Ese comentario es verdaderamente una instancia de la clase Comment?
    }
}