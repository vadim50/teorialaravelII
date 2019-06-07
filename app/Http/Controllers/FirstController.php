<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller{
	public function show(Request $request){
		$id = $request->id;
		dump($id);
		echo __METHOD__;
	}
}



 ?>