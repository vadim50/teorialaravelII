<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Gate;

class AdminUpdatePostController extends Controller
{
    //
    public function show(Request $request, $id){
    	$article = Article::find($id);
    	return view('default.update_post',['title'=>'Редактирование','article' => $article]);
    }

    public function create(Request $request){
    	$this->validate($request,['name'=>'required']);

    	$user = Auth::user();
    	$data = $request->except('_token');

    	$article = Article::find($data['id']);
    	//if(Gate::forUser(4)->allows('update-article',$article))
    	if(Gate::allows('update-article',$article)){
    		$article->name = $data['name'];
	    	$article->text = $data['text'];
	    	$article->img = $data['img'];

	    	$res = $user->articles()->save($article);

	    	return redirect()->back()->with('message','Материал Обновлен');
    	}

    	return redirect()->back()->with(['message'=>'Нет прав!']);
    }
}
