<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


	return view('welcome', [

		'posts' => Post::latest()->with(['category', 'author'])->get(),
		'categories' => Category::all()

	]);

    //return view('welcome', [

		//'posts' => Post::all()

	//]);

});


Route::get('posts/{post:slug}', function(Post $post){ //Post::where('slug', $post)->firstOrFail();

	//FInd a post by its slug and pass it to a view called "post"

	return view('post', [

		'post' => $post
	]);

	//ddd($path);

});


Route::get('categories/{category:slug}', function(Category $category){ //Post::where('slug', $post)->firstOrFail();

	//FInd a category by its slug

	return view('welcome', [

		'posts' => $category->posts,
		'currentCategory' => $category,
		'categories' => Category::all()
	]);

	//ddd($path);

});


Route::get('authors/{author:username}', function(User $author){ 

	//ddd($author);

	//FInd a category by its slug

	return view('welcome', [

		'posts' => $author->post,
		'categories' => Category::all()
	]);

	//ddd($path);

});
