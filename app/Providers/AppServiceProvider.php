<?php

namespace App\Providers;

use App\Models\KalenderAkademik;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Policies\PermissionPolicy;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Auth\Access\Gate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate::policy(Role::class, RolePolicy::class);
        // Gate::policy(Permission::class,PermissionPolicy::class);
        //
        View::composer('layouts.app',function($view){
            $view->with('kalender',KalenderAkademik::select('slug')->groupBy('slug')->get());
        });
        FilamentColor::register([
            'danger' => Color::Red,
            'gray' => Color::Zinc,
            'info' => Color::Blue,
            'primary' => Color::Amber,
            'success' => Color::Green,
            'warning' => Color::Amber,
        ]);
    }
}
