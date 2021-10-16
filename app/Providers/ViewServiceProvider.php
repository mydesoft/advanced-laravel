<?php
namespace App\Providers;

use App\Http\View\Composers\ChannelsComposer;
use App\Models\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
	
	public function register()
	{
		// code...
	}

	public function boot()
	{
		// Option 1
		// View::share('channels', Channel::orderBy('name')->get());

		// Option 2
		// View::composer(['posts.create', 'channels.index'], function($view){

		// 	$view->with('channels', Channel::orderBy('name')->get());
		// });

		// Option 3
		if (View::exists('posts.create')) {
			// code...
		View::composer(['posts.*', 'channels.*'], ChannelsComposer::class);
		}

		else{
			return 'Error Loading File';
		}
	}
}