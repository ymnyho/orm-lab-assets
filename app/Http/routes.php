<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/orm', function () {
   /*\App\Models\Post::create([
   		'title'=>'test title',
   		'content'=>'test content',
   ]);

   $post = new \App\Models\Post;
   $post->title = 'use new function to title';
   //寫入route.php中不是白名單的colum，ex:content column
   $post->content = 'use new function to content';	
   $post->save();*/

   /*all()
   $posts = \App\Models\Post::all();
   dd($posts);*/

   /*find()
   $posts = \App\Models\Post::find([1,2]);
   dd($posts);*/

   /*where()
   $posts = \App\Models\Post::where('is_feature','=',0)->orderBy('id')->get();
   dd($posts);*/

   /*update()，會被Mass Assignment擋掉
   $posts = \App\Models\Post::find(1);
   $posts->update([
   		'title'=>'updated title123',
   	]);*/
	
	/*save fn，不會被Mass Assignment擋掉
	$posts = \App\Models\Post::find(1);
	$posts->title = 'update title using save fn';
	$posts->save();*/

	/*where + update
	$posts = \App\Models\Post::where('id','5')->;
	$posts->update([
		'title'=>'updated title456',
	]);*/
	
	/*delete
	$post = \App\Models\Post::find(1);
	$post->delete();*/
	
	
	/*destroy
	\App\Models\Post::destroy(2,4);*/

	/*collect
	$posts = collect([1,3,5]);
	$posts->push(6);
	dd($posts);
	*/

	/*$posts = \App\Models\Post::all();
	$posts = $posts->toJson();
	dd($posts);*/


	$posts = \App\Models\Post::find(1);
	dd($posts);
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
