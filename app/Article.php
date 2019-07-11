<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //
	use SoftDeletes;

    //protected $table = 'articles';
    //protected $primaryKey ='id';
    //public $timestamps = false;
    // public $incrementing = false;
    //protected $quarded = ['name'];
    protected $fillable = ['name', 'img','text', 'user_id', 'updated_at', 'created_at'];
    //protected $dates = ['deleted_at'];

    //protected $casts = ['name'=>'boolean','text'=>'array'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    // public function getNameAttribute($value){
    // 	return 'Hello world'.$value.'Hello HEllo';
    // }
    // public function setNameAttribute($value){
    // 	$this->attributes['name'] = '| '.$value.' |';
    // }
}
