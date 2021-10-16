<?php
namespace App\Providers;
use App\PostCardService\PostCardService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PostCardServiceProvider extends ServiceProvider
{
	
	public function register()
	{
		// code...
	}

	public function boot()
	{
		$this->app->singleton('PostCard', function($app){
			return new PostCardService('NGR', 40, 60);
		});
	}
}