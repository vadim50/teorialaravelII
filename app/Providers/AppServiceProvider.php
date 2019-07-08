<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Article;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //View::share('title','HEllo Laravel V.VII');

        Blade::directive('myDir',function($var){
            return "<h1>New Directive - $var</h1>";
        });

        Response::macro('myRes',function($value){
            return Response::make(strtoupper($value));
        });

        // DB::listen(function($query){
        //     dump($query->sql);
        //     dump($query->bindings);
        // });

        Article::created(function(Article $article){
            Log::info('Article save:',
            [$article->user->name => $article->name]);
        });


    }
}
