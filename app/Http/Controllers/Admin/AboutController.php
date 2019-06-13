<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;


class AboutController extends Controller
{
    //
    public function show(){
    	//return view('');
    	//return 'Hello';
    	if(view()->exists('default.about')){
    		//return view('default.about')->withTitle('About V.VII');
    		$view = view('default.about')->withTitle('Hello World')->render();

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
