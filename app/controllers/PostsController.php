<?php

class PostsController extends \BaseController{
	
	public function index()
	{

	}
	public function create(){
		
		return View::make('posts.create');
	}
	public function store()
	{
		$post=new Posts;
		
		$post->title=Input::get('title');
		
		$post->body=Input::get('body');

		if(Input::hasFile('thumbnail')){

			$file=Input::file('thumbnail');
			$filename=time().'-'.$file->getClientOriginalName();
			$file=$file->move(public_path().'/images/',$filename);
			// Posts::store(Input::all());
			/*return array(
						'path'		=>  $file->getRealPath(),
						'size'		=>	$file->getSize(),
						'mime'		=>	$file->getMimeType(),
						'name'		=>	$file->getClientOriginalName(),
						'extension' =>	$file->getClientOriginalExtension(),
					);*/
			$post->thumbnail=$filename;
		}
		$post->save();
		return "done";
	}
}


?>