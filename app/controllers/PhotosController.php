<?php

class PhotosController extends \BaseController{
	
	public function index()
	{
		return View::make('photos.index');
	}
	
	public function create()
	{
		return View::make('photos.create');
	}
	
	public function store()
	{
		$input=Input::all();

		$filename=$input['upload']->getClientOriginalName();

		$image=Image::make($input['upload']->getRealPath());

		File::exists(user_photos_path()) or File::makeDirectory(user_photos_path());
		
		$image->save(user_photos_path().$filename)
			  ->resize(200,null,true)
			  ->greyscale()
			  ->save(user_photos_path().'th-'.$filename);
		
		return "done";
	}

	public function show($id)
	{
		return View::make('photos.show');
	}

}
?>