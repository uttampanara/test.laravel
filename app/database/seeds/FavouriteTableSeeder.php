<?php

class FavouriteTableSeeder extends seeder{

	public function run(){
	
		$faker=Faker\Factory::create();

		Favourite::truncate();

		foreach(range(1,30) as $index){
	
			$post=Posts::orderBy(DB::raw('RAND()'))->first();

			User::orderBy(DB::raw('RAND()'))->first()->favourite()->attach($post->id);

		}
	}
}