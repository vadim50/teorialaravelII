<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function add(User $user){
        
            foreach($user->roles as $role){
                if($role->name == 'Admin'){
                    return true;
                }
            }
            return false;
      
    }
    public function update(User $user,Article $article){
        foreach($user->roles as $role){
                if($role->name == 'Admin'){
                    if($user->id == $article->user_id){
                        return true;
                    }
                }
            }
            return false;
    }
    public function before(User $user){
        foreach($user->roles as $role){
                if($role->name == 'Admin'){
                    return true;
                }
            }
            return false;
    }
}
