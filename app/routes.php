<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Auth::loginUsingId(1);

Route::get('/',function()
{
	$posts=Posts::all();

	return View::make('posts.index',compact('posts'));
});

Route::get('users/{userId}/favourite',function($userId){

	$posts=User::findOrFail($userId)->favourite;

	return View::make('posts.index',compact('posts')); 
});

Route::delete('favourite/{postId}',['as'=>'favourite.destroy',function($postId){
	
	Auth::user()->favourite()->detach($postId);
	
	return Redirect::back();
}]);

Route::post('favourite',['as'=>'favourite.store',function(){
	
	Auth::user()->favourite()->attach(Input::get('post_id'));
	
	return Redirect::back();

}]);
// function user_photos_path()
// {
// 	return public_path().'/images/'.Auth::user()->username.'/';
// }

// Route::get('/', function()
// {
	
// 	$image=Image::make(file_get_contents('http://www.menucool.com/slider/prod/image-slider-4.jpg'));
// 	$image->resize(300,150);
	
// 	return Response::make($image,200,array('content-type'=>'image/jpeg'));
// 	// return View::make('hello');
// });
// // Route::post('lessons','LessonsController@store');
// Route::resource('posts','PostsController');
// Route::resource('photos','PhotosController');