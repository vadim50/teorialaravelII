<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Article;

class AdminPostController extends Controller
{
    //
    public function show(){
    	return view('default.add_post',['title'=>'Новый Материал']);
    }

    public function create(Request $request){

        // if(Gate::denies('add-article')){
        //     return redirect()->back()->with(['message'=>'Нет прав!']);
        // }
        $article = new Article;

        // if(Gate::denies('add',$article)){
        //     return redirect()->back()->with(['message'=>'Нет прав!']);
        // }

        if($request->user()->cannot('add',$article)){
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
