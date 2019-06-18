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
    protected $fillable = ['name','text','img'];
    protected $dates = ['deleted_at'];
}
