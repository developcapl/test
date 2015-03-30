<?php namespace Fresh\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider{
	
	public function register(){
		$this->app->bind('Fresh\Storage\User\UserRepository','Fresh\Storage\User\EloquentUserRepository');
	}
}