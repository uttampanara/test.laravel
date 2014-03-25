<?php namespace Acme\Composers;

use DB,Auth;

class PostComposer{
	public function compose($view){

		$favourite=DB::table('favourite')->whereUserId(Auth::user()->id)->lists('posts_id');

		$view->with('favourite',$favourite);
	} 
}
?>