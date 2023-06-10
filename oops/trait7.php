<?php
trait Sharable {
  public function share() {
    echo "Shared!\n";
  }
}

class Post {
  use Sharable;

  public function post() {
    echo "Posted!\n";
  }
}

class Comment {
  use Sharable;

  public function comment() {
    echo "Commented!\n";
  }
}

$post = new Post();
$post->post(); 
$post->share();

$comment = new Comment();
$comment->comment(); 
$comment->share(); 
?>