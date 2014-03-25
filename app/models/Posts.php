<?php
class Posts extends Eloquent{
	protected $fillable=array('title','body','user_id');
	public $timestamps = false;
}

?>