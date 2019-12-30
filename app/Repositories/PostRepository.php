<?php

namespace App\Repositories;
use DB;
use App\Models\Post;
use App\Repositories\BaseRepository;
/**
 *
 */
class PostRepository extends BaseRepository
{

	public function __construct(Post $post)
	{
		$this->model = $post;
	}

	public function createPost($data)
	{
		$post = $this->create($data);

		return $post;
	}

	public function getData()
	{
		return Post::all()->toArray();
	}

	public function getPost($id)
	{
		return Post::find($id);
	}

	public function updatePost($data, $id)
	{
		return $this->update($data, $id);
	}

	public function getPostById($id)
	{
		return $this->model->where('id', $id)->first();
	}
}
?>
