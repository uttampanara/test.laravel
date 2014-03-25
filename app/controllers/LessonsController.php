<?php

class LessonsController extends \BaseController{
	
	public function store(){
		
		Lesson::create(Input::all());
		return "Success";
	}
}


?>