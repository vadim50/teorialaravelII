<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show(){
    	//return view('');
    	if(view()->exists('default.about')){
    		return view('default.about')->withTitle('About V.VII');
    	}
    	abort(404);
    }
}
