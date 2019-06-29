<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    //
    public function __construct(){
    	//$this->middleware('auth');
    }
    public function show(Request $request){

    	$user = Auth::user();

	if(!Auth::check()){

		$user = User::find(4);
		//return redirect('/login');
		//Auth::guard('web')->login($user);
		//Auth::guard('web')->logout();
		Auth::loginUsingId(4);
	}

	if(Auth::viaRemember()){
		echo'yes';
	}

    	//$user = $request->user();

    	// dump($user);
		dump(Auth::id());

    	return view('/home');
    }
}
