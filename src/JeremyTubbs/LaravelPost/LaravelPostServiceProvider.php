<?php namespace JeremyTubbs\LaravelPost;

use Illuminate\Support\ServiceProvider;

class LaravelPostServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jeremy-tubbs/laravel-post');

		if (\Config::get('laravel-post::routes.use_package_routes', true))
		{
			include __DIR__.'/../../routes.php';
		}

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
