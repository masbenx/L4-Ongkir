<?php namespace Masbenx\Ongkir;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class OngkirServiceProvider extends ServiceProvider {

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
        $this->package('masbenx/ongkir');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
        $app = $this->app;
        $this->app['ongkir'] = $this->app->share(function($app)
        {
            return new Ongkir;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('Ongkir', 'Masbenx\Ongkir\Facades\Ongkir');
        });
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
