<?php
use App\Models\Post;	//
use Carbon\Carbon;	//Carbon的namespace寫法
//use Faker\Factory;	//Faker的namespace寫法
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();
		$faker = \Faker\Factory::create('zh_TW');

    	foreach (range(10,1) as $number) {
	        Post::create([	//靜態屬性呼叫Post::，create(function)
	        	/*'title'=>'make title '.$number,	        	
	        	'content'=>'make content '.$number,
	        	'title'=>$faker->Title,
	        	'content'=>$faker->Name,
	        	'title'=>$faker->sentence,
	        	'content'=>$faker->paragraph,*/
	        	'title'=>$faker->sentence,
	        	'content'=>$faker->paragraph,
	        	'is_feature'=>rand(0,1),	        	
	        	'created_at'=>Carbon::now()->subDay($number),
	        	'updated_at'=>Carbon::now()->subDay($number),
	        ]);
        }
    }
}
