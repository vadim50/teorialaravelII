<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    //
    public function show(){
    	// $data = ['title'=> 'Hello Laravel III'];
    	// return view('default.template',$data);

    	// $view = view('default.template');
    	// $view->with('title','Hello Laravel 1');
    	// $view->with('title2','Hello Laravel 2');

    	// return $view;
    	if(view()->exists('default.index')){
    		
    		// $path = config('view.paths');
    		// return view()->file($path[0].'/default/template.blade.php')->withTitle('hello laravel');
    		//return view('default.template')->withTitle('Hello Laravel V');
    		
            // ================================ Bred ====================
    		// View::name('default.template', 'myview');
	    	// return view()->of('myview')->withTitle('Hello All!');
            // ================================= Bred ne pabotaet ============

            $view = view('default.index',['title'=>'HEllo'])->render();
            return $view;
            //echo view('default.template',['title'=>'Hello!!'])->getPath();
    	}

    	abort(404);
    }
}
