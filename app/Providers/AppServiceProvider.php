<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SDSLabs\Quark\App\Models\Competition as QuarkCompetition;
use App\Models\Competition as AppCompetition;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(QuarkCompetition::class, AppCompetition::class);
    }
}
