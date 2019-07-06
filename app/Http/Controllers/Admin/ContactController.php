<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    // protected $request;

    // public function __construct(Request $request){
    // 	$this->request = $request;
    // }

    public function store(Request $request){


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
		//print_r($request->segments());
		if($request->isMethod('post')){



			// $request->flash();
			// $request->flush();
			//$request->old();
			// $request->flashOnly('name','site');
			// $request->flashExcept('name','site');
			// return redirect()->route('contacts');
			//echo '<h1 style="margin-top:150px;">'.$request->method().'</h1>';
			//return redirect()->route('contacts')->withInput();

			

	

			$messages = [

				'required' => 'ПОЛЕ :attribute обязательно к заполнению !!',
            	'email' => 'ПОЛЕ :attribute должно быть email адресом',

			];

			$validator = Validator::make($request->all(),[

				'name'=>'required',
				//'email'=>'sometimes|email|required',
				//'email'=>'email|required',

			],$messages);

			$validator->sometimes(['email','site'],'required',function($input){
				//dump($input);die;
				return strlen($input->name) >= 10;
			});

			// $validator->after(function($validator){
			// 	$validator->errors()->add('email','Add Message');
			// });

			if($validator->fails()){
				//dump($validator->errors());
				$messages = $validator->errors();
				if($messages->has('name')){
					dump($messages->first('email','<p>  :message </p>'));
					dump($messages->all('<p> :message </p>'));
					dump($messages->get('name'));
				}
				dump($messages->all());
				dump($messages->first('email'));

				dump($validator->failed());exit;

				return redirect()->route('contacts')->withErrors($validator)->withInput();
			}
		}

		return view('default.contacts',['title'=>'Contacts']);
    }
    public function show(Request $request){

    	// $result = $request->session()->get('key','default');
    	$result = $request->session()->all();

    	dump($result);

    	return view('default.contacts',['title'=>'Contacts']);
    }
}
