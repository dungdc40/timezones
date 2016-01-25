<?php namespace Dungdc\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
        {
            $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
        {
            include __DIR__.'/routes.php';
            $this->app->make('Dungdc\Timezones\TimezonesController');
        }

}
