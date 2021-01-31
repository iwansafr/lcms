<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $data_menu = [];
        $data_menu[] = ['icon' => 'fas fa-tachometer-alt', 'title' => 'Dashboard', 'link' => '/dashboard'];
        $data_menu[] = ['icon' => 'fa fa-user', 'title' => 'User', 'link' => '#', 'child' => [
            ['title' => 'User', 'link' => '/dashboard/user'],
            ['title' => 'Role', 'link' => '/dashboard/role'],
        ]];
        view()->share('menu', $data_menu);
    }
}
