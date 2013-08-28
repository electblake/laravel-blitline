<?php
namespace PeachSchnapps\Blitline;
use Illuminate\Support\ServiceProvider;
class BlitlineServiceProvider extends ServiceProvider {

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
		$app = $this->app;

		$this->package('peach-schnapps/blitline');
		$app_id = $app['config']->get('blitline::app_id', 0);
		define('BLITLINE_APP_ID', $app_id);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

    // Shortcut so developers don't need to add an Alias in app/config/app.php
    $this->app->booting(function()
    {
      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
      $loader->alias('Blitline', '\Karikas\Blitline\Api');
    });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('blitline');
	}

}