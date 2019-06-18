<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;

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
    }
    public function getArticle($id){
    	echo 'Otvet->'.$id;
    } 
}
