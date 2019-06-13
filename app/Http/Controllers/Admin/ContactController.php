<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    // protected $request;

    // public function __construct(Request $request){
    // 	$this->request = $request;
    // }

    public function show(Request $request, $id='false'){

		//print_r($request->all());
		//$data = $request->only('name','site');
		//$data = $request->except('_token');
		//$data = $request->all();

		//print_r($data);

		

		// if($request->is('contacts/*')){
		// 	echo '<h1 style="margin-top:150px;">'.$request->path().'</h1>';
		// }
		// if($request->has('name')){
		// 	echo '<h1 style="margin-top:150px;">'.$request->input('name','Default').'</h1>';
		// }

		//echo '<h1 style="margin-top:150px;">'.$request->url().'</h1>';
		//echo '<h1 style="margin-top:150px;">'.$request->fullUrl().'</h1>';

		//echo '<h1 style="margin-top:150px;">'.$request->method().'</h1>';

		// echo '<h1 style="margin-top:150px;">'.$request->root().'</h1>';
		// echo '<h1 style="margin-top:150px;">'.$request->query('option').'</h1>';
		// print_r($request->header());
		// print_r($request->server());
		print_r($request->segments());
		if($request->isMethod('post')){



			// $request->flash();
			// $request->flush();
			//$request->old();
			// $request->flashOnly('name','site');
			// $request->flashExcept('name','site');
			// return redirect()->route('contacts');
			//echo '<h1 style="margin-top:150px;">'.$request->method().'</h1>';
			//return redirect()->route('contacts')->withInput();
		}

		return view('default.contacts',['title'=>'Contacts','id'=>$id]);
    }
}
