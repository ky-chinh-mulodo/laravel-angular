<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use Validator;
use Config;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Exceptions\JWTException;
use Dingo\Api\Exception\ValidationHttpException;

class PostController extends Controller
{
	use Helpers;
	public function index()
	{
		$posts = Post::all();
		return json_encode($posts);
	}

	public function delete($id)
	{
		$post = Post::find($id);
		if(!$post)
	        throw new NotFoundHttpException;

	    if($post->delete())
	        return $this->response->noContent();
	    else
	        return $this->response->error('could_not_delete_book', 500);
	}

	public function add(Request $request)
	{
		// var_dump($request); die('ss');
		$post = new Post;
		$post->title = $request->get('title');
		$post->content = $request->get('content');
		$post->create_by = $request->get('create_by');
		$post->update_by = $request->get('update_by');
		$post->del_flg = $request->get('del_flg');
		$post->type = $request->get('type');
		$post->status = $request->get('status');

		if ($post->save()) {
			return $this->response->created();
		}
		else
		{
        	return $this->response->error('could_not_create_post', 500);
		}
	}

	public function edit($id, Request $request)
	{
		$post = Post::find($id);
		if ( ! $post) {
			throw new NotFoundHttpException;
		}
		// var_dump($request); die;
		$post->title = $request->get('title');
		$post->content = $request->get('content');
		$post->create_by = $request->get('create_by');
		$post->update_by = $request->get('update_by');
		$post->del_flg = $request->get('del_flg');
		$post->type = $request->get('type');
		$post->status = $request->get('status');

		// $post->fill($request->all());

		if ($post->save()) {
			return $this->response->noContent();
		}
		else
		{
        	return $this->response->error('could_not_update_post', 500);
		}
	}

	public function show($id)
	{
		$post = Post::find($id);
		return response($post);
	}
}