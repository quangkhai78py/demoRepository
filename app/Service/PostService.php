<?php

namespace App\Service;

use App\Repositories\PostRepository;
/**
 *
 */
class PostService
{
	public $postRepo;

	public function __construct(PostRepository $postRepo)
	{
		$this->postRepo = $postRepo;
	}

	public function post($id)
	{
		$postData = $this->postRepo->getPostById($id);

		if(!empty($postData)){
			return [
				'error' => 0,
				'success' => $postData,
			];
		}else{
			return [
				'error' => 1,
				'message' => 'post_not_exist',
			];
		}
	}
}
?>
