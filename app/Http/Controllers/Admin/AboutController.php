<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    //
    public function show(){
    	//return view('');
    	//return 'Hello';
    	if(view()->exists('default.about')){
            // $articles = DB::select("SELECT * FROM `articles` WHERE id=?",[2]);
            //$articles = DB::select("SELECT * FROM `articles`");
            //$articles = DB::select("SELECT * FROM `articles` WHERE id=:id",['id'=>2]);
            // DB::insert("INSERT INTO `articles` (`name`,`text`,`img`) VALUES(:name,:text,:img)",

            //     [

            //         'name'=>'Test I',
            //         'text'=>'TEXT',
            //         'img'=>'pic4.jpg'
            //     ]
            // );

            //$res = DB::connection()->getPdo()->lastInsertId();

            // $res = DB::update("UPDATE `articles` SET `name`=:name WHERE id=:id",
            //     ['name'=>'TEST III','id'=>5]);



            //$res = DB::delete('DELETE FROM `articles` WHERE id=:id',['id'=>5]);

            //DB::statment('DROP table `articles`');


            $articles = DB::select("SELECT * FROM `articles`");
            dump($articles);
            $page = DB::select('SELECT `name`,`alias`,`text` FROM `pages` WHERE alias=:alias',

                ['alias'=>'about']

            );
            //dump($res);
    		//return view('default.about')->withTitle('About V.VII');
    		return view('default.about',['title'=>'About','articles'=>$articles,'page'=>$page[0]]);

    		// return (new Response($view,200))
    		// ->header('Content','HEllo')
    		// ->header('Hello','Vasya')
    		// ->header('Content-Type','newTypeII');

    		// return response($view)
    		// ->header('Content','HEllo')
    		// ->header('Hello','Vasya')
    		// ->header('Content-Type','newTypeII');

    		//return response()->json(['name'=>'HEllo','text'=>'World']);
    		// return response()->view('default.about',['title'=>'hello laravel']);
    		// return response()->download('robots.txt','mytext.txt',['headerOne'=>'hello','headerTwo'=>'hello1']);
    		//return response($view)->withHeaders(['headerOne'=>'hello','headerTwo'=>'hello1']);

    		// return redirect('/articles')->withInput();
    		//return redirect()->route('home');
    		//return redirect()->action('Admin\ContactController@show');
    		// return new RedirectResponse('/articles');
    		//return RedirectResponse::create('/articles');
    		//return redirect('/articles')->with('param1','hello');
    		//return response()->myRes('Hello world');

    	}
    	abort(404);
    }
}
