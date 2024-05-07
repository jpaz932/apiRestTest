<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

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
        Validator::extend('exists_in_categories', function ($attribute, $value, $parameters, $validator) {
            return Category::where('id', $value)->exists();
        });
    }
}
