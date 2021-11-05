<?php

class Post {

	protected $post;
	protected $id;

	public function __construct($id)
	{
		$this->id = $id;
	}

	public function find($id)
	{
		$this->post = get_post($id);
	}

	public function __get($name)
	{
		return get_post_meta($this->id, $name, true);
	}

	public function __set($name, $value)
	{
		return update_post_meta($this->id, $name, $value);
	}
}

$post = new Post($postId);

echo $post->name;

$post->city = "São Paulo";
echo $post->city); // São Paulo
