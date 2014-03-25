<?php
class PostsTableSeeder extends seeder{
	public function run()
	{
		$faker=Faker\Factory::create();

		Posts::truncate();

		foreach (range(1,30) as $index) {

			$userId=User::orderBy(DB::raw('RAND()'))->first()->id;

			Posts::create([
			
				'user_id'	=>	$userId,
			
				'title'		=>	$faker->sentence(5),
			
				'body'		=>	$faker->paragraph(3)
			
			]);
		
		}
	
	}

}