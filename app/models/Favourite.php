<?php

class Favourite extends Eloquent{

	protected $table="favourite";

	protected $fillable=array('user_id','post_id');

	public $timestamps = false;

}

?>