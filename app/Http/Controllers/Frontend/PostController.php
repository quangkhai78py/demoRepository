<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Http\Requests\Frontend\RequestPost;

class PostController extends Controller
{
    public $postRepo;

    public function  __construct(

        PostRepository $postRepo

    )
    {
        $this->postRepo = $postRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPost()
    {
        return view('Frontend.post');
    }

    public function showTable()
    {
        $getDataPost = $this->postRepo->getData();

        return view('Frontend.listPost',compact('getDataPost'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPost(RequestPost $request)
    {
        $data = $request->all();

        $post = $this->postRepo->createPost($data);

        if(!empty($post)){
            return redirect()->back()->with('success', __('Create Post success.'));
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEdit($id)
    {
        $data = $this->postRepo->getPost($id);

        return view('Frontend.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        $data = $request->all();

        $update = $this->postRepo->updatePost($data, $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
