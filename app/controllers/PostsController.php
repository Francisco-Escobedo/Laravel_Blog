<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts=Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->image_url = Input::get('image');
		$post->tags = Input::get('tags');
		$post->user_id = User::first()->id;

		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			// validation failed, redirect to the post create page with validation errors and old inputs
			Session::flash('errorMessage', 'Something went wrong with your post');
			$message = Session::get('errorMessage');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			// saves post after successful validation of inputs
			if ($post->save()){
				Log::info('New post containing title, body, image_url, tags');
				Session::flash('successMessage', 'Post successfully saved');
				$message = Session::get('successMessage');
				return Redirect::action('PostsController@create');
			} else {
				return Redirect::back()->withInput();
			}
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id=1)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id=1)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post=Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->image_url = Input::get('image');
		$post->tags = Input::get('tags');
		$post->user_id = User::first()->id;

		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Something went wrong with your post');
			$message = Session::get('errorMessage');
			// validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			// saves post after successful validation of inputs
			if ($post->save()){
				Session::flash('successMessage', 'Post successfully saved');
				$message = Session::get('successMessage');
				return Redirect::action('PostsController@edit');
			} else {
				return Redirect::back()->withInput();
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
