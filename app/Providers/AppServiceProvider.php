<?php

namespace App\Providers;

use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        VerifyCsrfToken::except(['routename']);
//        TrimStrings::except(['password']);

//        foreach (Permission::with('roles')->get() as $permission)
//        {
//            Gate::define($permission->name , function ($admin) use($permission){
//
//                return $admin->hasRole($permission->roles);
//            });
//        }
    }
}
