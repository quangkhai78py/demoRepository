<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\PostService;

class ApiPostController extends Controller
{
	public $postApi;

    public function __construct(PostService $postApi)
    {
    	$this->postApi = $postApi;
    }

    public function getPost(Request $request)
    {
    	$id = $request->input('id');

    	$post = $this->postApi->post($id);

    	return response()->json($post, 200);
    }

}
