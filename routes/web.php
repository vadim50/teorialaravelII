<?php
use Illuminate\Http\Request;
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
//6666666666666666666666666666666666666666666666666666666666666666666666666

//uniform resurce indentify = uniform resurce locator + uniform resurse name

//===========================================================================
Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/',['as'=>'home','middleware'=>'auth','uses'=>'Admin\IndexController@show']);

Route::get('/article/{id}/{name}', function ($id,$name) {
    //return view('welcome');
    echo $id;
    echo '<br>';
    echo $name;
})->name('article');

Route::get('/page/{id?}/{cat?}',function($var1=null,$var2=null){
	echo $var1.' || '.$var2;
});

//Route::get('/page',function(){
	// print_r(env('APP_NAME'));
	// echo'<p></p>';
	// print_r(env('APP_ENV'));
	// print_r($_ENV);
	// echo config('app.locale');
	// echo Config::set('app.locale','ru');
	// echo Config::get('app.locale');
// 	return view('page');
// });

// Route::match(['post','get'],'/comments',function(Request $request){
// 	$name = $request->input('name');
// 	$text = $request->input('text');
	
// 	return view('page',['name'=>$name,'text'=>$text]);
// })->name('comments');
Route::any('/comments',function(Request $request){
	$name = $request->input('name');
	$text = $request->input('text');
	return view('page',['name'=>$name,'text'=>$text]);
})->name('comments');
// Route::any('/comments',function(){
// 	print_r($_POST);
// })->name('comments');

Route::group(['prefix'=>'admin/{id}'],function(){
	Route::get('page/create/{i}',function($i){
		//return redirect()->route('article',['id'=>25,'name'=>'hello']);
		//echo 'page/create';
		$route = Route::current();

		//echo $route->getName();
		echo $route->getParameter('i');

	})->name('createpage');
	Route::get('page/edit',function(){
		echo 'page/edit';
	});
});

Route::get('/about/{id}','FirstController@show');
Route::get('/dir/about','Dir\FirstController@show');

Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{page}',['middleware'=>'mymiddle:home','uses'=>'Admin\Core@getArticle','as'=>'article']);

Route::get('/pages/add','Admin\CoreResource@add');
Route::resource('/pages','Admin\CoreResource');//exept/['only'=>['index','show']];



