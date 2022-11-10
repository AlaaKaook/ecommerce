<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Message;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        View::share('categories', Category::all());

        $msgs = Message::where('is_replay' , 0)->where('sender' , 'customer')->orderBy('created_at' , 'desc')->get();
        View::share('msgs', $msgs);

        Paginator::defaultView('pagination::new_paginate');
        Paginator::defaultSimpleView('pagination::new_simple-pagenate');
    }
}
