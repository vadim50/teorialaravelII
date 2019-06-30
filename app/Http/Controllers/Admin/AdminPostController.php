<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminPostController extends Controller
{
    //
    public function show(){
    	return view('default.add_post',['title'=>'Новый Материал']);
    }

    public function create(Request $request){

        if(Gate::denies('add-article')){
            return redirect()->back()->with(['message'=>'Нет прав!']);
        }
    	$this->validate($request,['name'=>'required']);

    	$user = Auth::user();
    	$data = $request->all();

    	$res = $user->articles()->create([

    		'name' => $data['name'],
    		'text' => $data['text'],
    		'img' => $data['img']

    	]);

    	return redirect()->back()->with('message','Материал добавлен');
    }
}
