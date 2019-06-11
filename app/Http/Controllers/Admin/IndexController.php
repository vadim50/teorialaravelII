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

        $array = [
            'title'=>'Laravel Project',
            'data'=>[
                // 'one'=>'List 1',
                // 'two'=>'List 2',
                // 'threee'=>'List 3',
                // 'four'=>'List 4',
                // 'five'=>'list 5'
            ],
            'dataI'=>['List 1','List 2','List 3','list 4','list 5'],
            'bvar'=>true,
            'false'=>'False',
            'script'=>"<script>alert('hello')</script>",
            'title'=>'Hello Laravel V.VIII'
        ];
    	if(view()->exists('default.index')){
    		
    		// $path = config('view.paths');
    		// return view()->file($path[0].'/default/template.blade.php')->withTitle('hello laravel');
    		//return view('default.template')->withTitle('Hello Laravel V');
    		
            // ================================ Bred ====================
    		// View::name('default.template', 'myview');
	    	// return view()->of('myview')->withTitle('Hello All!');
            // ================================= Bred ne pabotaet ============

            $view = view('default.index',$array)->render();
            return $view;
            //echo view('default.template',['title'=>'Hello!!'])->getPath();
    	}

    	abort(404);
    }
}
