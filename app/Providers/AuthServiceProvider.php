<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Article;
use App\Policies\ArticlePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        //'App\Article' => 'App\Policies\ArticlePolicy'
        Article::class => ArticlePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Auth::define('add-article','Controller@method');
        // Gate::define('add-article',function(User $user){
        //     $user = User::find(4);
        //     foreach($user->roles as $role){
        //         if($role->name == 'Admin'){
        //             return true;
        //         }
        //     }
        //     return false;
        // });

        // Gate::define('update-article',function(User $user, $article){
        //     foreach($user->roles as $role){
        //         if($role->name == 'Admin'){
        //             if($user->id == $article->user_id){
        //                 return true;
        //             }
        //         }
        //     }
        //     return false;
        // });
    }
    
}
