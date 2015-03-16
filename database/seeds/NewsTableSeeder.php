<?php 

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\News;

class NewsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		for($i=0;$i<10;$i++)
		{
			News::create([
				'title' => $faker->name,
				'description' => $faker->sentence(12)
			]);
		}		
	}
}

?>