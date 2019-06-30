<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\User;
use App\Country;
use App\Role;

class Core extends Controller
{
    //
    protected static $articles;
    public function __construct(){
    	// $this->middleware('mymiddle');
    }
    public static function addArticles($array){
    	return self::$articles[] = $array;
    }
    public function getArticles(){
    	// $articles = DB::table('articles')->get();
    	// $articles = DB::table('articles')->first();
    	// $articles = DB::table('articles')->value('name');
    	// DB::table('articles')->orderBy('id')->chunk(2,function($articles){
    	// 	foreach($articles as $article){
    	// 		Core::addArticles($article);
    	// 	}
    	// });

    	//$articles = DB::table('articles')->pluck('name');
    	// $articles = DB::table('articles')->count();
    	//$articles = DB::table('articles')->max('id');
    	//$articles = DB::table('articles')->select('name','id','text')->get();
    	// $articles = DB::table('articles')->distinct()->select('name')->get();
    	// $query = DB::table('articles')->select('name');
    	// $articles = $query->addSelect('text AS fulltext')->get();
    	// $articles = DB::table('articles')->select('text')->where('id','=',6)->get();

    	// $articles = DB::table('articles')->select('name','text')
    	// 		->where('id','>',5)
    	// 		->where('name','like','test%','or')
    	// 		->get();

    	// $articles = DB::table('articles')->select('name','text')
    	// 		->where([
    	// 				['id','>',5],
    	// 				['name','like','test%','or']
    	// 				])
    	// 		->get();
    	// $articles = DB::table('articles')->select('name','text')
    	// 		->where('id','>',5)
    	// 		->where('name','like','test%')
    	// 		->orWhere('id','<',1)
    	// 		->get();
    	//where between 1 and 5
    	// $articles = DB::table('articles')->whereBetween('id',[1,5])->get();
    	// $articles = DB::table('articles')->whereNotBetween('id',[1,5])->get();
    	// $articles = DB::table('articles')->whereIn('id',[1,2,3,5])->get();
    	// $articles = DB::table('articles')->whereNotIn('id',[1,2,3,5])->get();
    	// $articles = DB::table('articles')->select('img')->groupBy('img')->get();
    	// $articles = DB::table('articles')->take(4)->get();
    	// $articles = DB::table('articles')->take(4)->skip(2)->get();
    	// DB::table('articles')->insert(

    	// 	[

    	// 		['name'=>'Test2','text'=>'hello','img'=>'pic5.jpg'],
    	// 		['name'=>'Test3','text'=>'hello IIIV','img'=>'pic6.jpg']

    	// 	]

    	// );

    	// $res = DB::table('articles')->insertGetId(['name'=>'Test3','text'=>'hello3','img'=>'pic7.jpg']);


    	//$res = DB::table('articles')->where('id',10)->update(['name'=>'22laravel V.VIII']);
    	// $res = DB::table('articles')->where('id',10)->delete();

    	// $articles = DB::table('articles')->get();
    	// dump($articles);
    	// dump($res);
    	//dump(self::$articles);

    	//$articles = Article::all();

    	// foreach ($articles as $article) {
    	// 	echo $article->name.'<br>';
	    	// }
    	//$articles = Article::where('id','>',3)->get();
    	//$articles = Article::where('id','>',3)->orderBy('name')->take(2)->get();
    	// $article = Article::find(1);
    	// $article = Article::where('id',1)->first();
    	//$articles = Article::find([1,2,3]);
    	// $articles = Article::findOrFail(100);
    	//$articles = Article::findOrFail(100);
    	//$articles = Article::where('id',100)->firstOrFail();
    	// $article = new Article;
    	// $article->name = 'New Article';
    	// $article->text = 'New Text';
    	// $article->img = 'newpic.jpg';
    	// $article->save();

    	// $article = Article::find(10);
    	// $article->name = 'New Article 2';
    	// $article->text = 'New Text 2';
    	// $article->img = 'newpic2.jpg';
    	// $article->save();

    	// $articles = Article::all();
    	// dump($articles);
    	//dump($article->name);

    	// Article::chunk(2,function($articles){

    	// });

    	// Article::create(

    	// 	[

    	// 		'name'=>'Hello World create',
    	// 		'text'=>'Some Text create',
    	// 		'img'=>'somepic.jpg'
    	// 	]
    	// );

    	// $article = Article::firstOrCreate([

    	// 	'name'=>'Hello World create 1',
    	// 	'text'=>'Some Text create',
    	// 	'img'=>'somepic.jpg'

    	// ]);

    	// $article = Article::firstOrNew([

    	// 	'name'=>'Hello World create 2',
    	// 	'text'=>'Some Text create',
    	// 	'img'=>'somepic.jpg'

    	// ]);

    	// $article->save();
    	// $article = Article::find(13);

    	// $article->delete();

    	//Article::destroy(12);
    	//Article::destroy([11,10]);
    	//Article::where('id',9)->delete();

    	//Soft Delete==========================>>
    	// $article = Article::find(9);
    	// $article->delete();
    	//=====================================>>



    	//$articles = Article::all();
    	//$articles = Article::withTrashed()->get();
    	 //$articles = Article::withTrashed()->get();
    	//$articles = Article::onlyTrashed()->restore();

    	 // foreach($articles as $article){
    	 // 	if($article->trashed()){
    	 // 		echo $article->id.') '.$article->name.' Deleted!<br>';
    	 // 		$article->restore();
    	 // 	}else{
    	 // 		echo $article->id.') '.$article->name.'No Deleted<br>';
    	 // 	}
    	 // }
    	// uent
    	// ONE TO ONE
    	// $user = User::find(1);
    	// $country = Country::find(1);

    	// dump($country->user);
    	// dump($user->country);
    	//One TO MANY=======
    	//$user = User::find(1);
    	//$a = $user->articles;
    	// $a = $user->articles()->where('id','>',3)->get();
    	// foreach($a as $ar){
    	// 	echo $ar->id.') '.$ar->name.'<br>';
    	// }
    	// echo '<hr>';

    	// $author = Country::find(1);

    	// dump($author->user->email);
    	// $article = Article::find(1);
    	// dump($article->user->name);
    	//Many To Many
    	//$role = User::find(1)->roles()->where('roles.id','=','2')->first();
    	// foreach($user->roles as $role){
    	// 	echo $role->id.') '.$role->name.'<br>';
    	// }
    	//$user = Role::find(1)->users()->where('users.id',1)->first();
    	
    	//dump($user->name);
    	// $role = Role::find(1);
    	// dump($role->users);

    	// $articles = Article::all();


    	// dump($articles);
    	//dump($article);

    	//$articles = Article::all();
    	//$articles = Article::with('user')->get();

    	// $articles->load('user');

    	// foreach($articles as $article){
    	// 	echo $article->user->name.'<br>';
    	// }

    	// $users = User::with('articles','roles')->get();
    	// $users = User::has('articles')->get();
    	//$users = User::has('articles','>=',3)->get();

    	//foreach ($users as $user) {
    		# code...
    		//dump($user->roles);
    		//dump($user);
    	//}

    	//dump($articles);

    	

    	// $article = new Article([

    	// 	'name'=>'New New Article',
    	// 	'text'=>'NEw NEw TExt',
    	// 	'img'=>'newImg.jpg'

    	// ]);

    	//$user->articles()->save($article); //models
   //  	$user->articles()->create([ //massive
			// 'name'=>'New New Article II',
   //  		'text'=>'NEw NEw TExt II',
   //  		'img'=>'newImg1.jpg'


   //  	]);
    	// $user->articles()->saveMany(

    	// 	[
    	// 		new Article(['name'=>'New I) New Article','text'=>'NEw NEw TExt I','img'=>'newImg.jpg']),
    	// 		new Article(['name'=>'New II) New Article','text'=>'NEw NEw TExt II','img'=>'newImg.jpg']),
    	// 		new Article(['name'=>'New III) New Article','text'=>'NEw NEw TExt III','img'=>'newImg.jpg']),

    	// 	]

    	// );
    	// $role = new Role(['name'=>'quest']);
    	// $user->roles()->save($role);

    	// $user = User::find(2);

    	// $user->articles()->where('id',8)->update(['name'=>'NEW TEXT IIIIVVV']);

    	// $articles = Article::all();

    	// dump($articles);

    	// $country = Country::find(1);
    	// $user = User::find(2);

    	// $country->user()->associate($user);
    	// $country->save();
    	// $articles = Article::all();
    	// $user = User::find(2);

    	// foreach($articles as $article){
    	// 	$article->user()->associate($user);
    	// 	$article->save();
    	// }
    	// $user = User::find(2);
    	// $role_id = Role::find(2)->id;

    	// $user->roles()->attach($role_id);
    	// $user->roles()->detach($role_id);

    	//Mutators Accessors==

    	//$article = Article::find(13);
    	//dump($article);

    	//$article->name = 'Some TExt Mutator!';

    	//echo $article->name;
    	// $arr = ['key'=>'hello world'];
    	// $article->text = $arr;
    	// $article->save();
    	// dump($article->text);
    	// dump($article->toArray());
    	//dump($article->toJson());
    	//dump((string)$article);

        $articles = Article::all();

        foreach($articles as $article){
            echo $article->id.') '.$article->name.'| |'.$article->text.'|||'.$article->img.'<br>';
            
        }
        $user = User::find(4);
        $roles = $user->roles;
       foreach($roles as $role){
        echo $role->name;
       }
        // $users = User::all();

        // foreach($users as $user){
        //     echo $user->name.'|'.$user->email.'<br>';
        // }


    }
    public function getArticle($id){
    	echo 'Otvet->'.$id;
    } 
}
