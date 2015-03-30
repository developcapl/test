<?php

use Fresh\Storage\User\UserRepository as User;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function __construct(User $user){
		$this->user = $user;
		$this->redis = Redis::connection();
	}

	public function showWelcome()
	{
		return View::make('test');
	}

	public function repository()
	{		//$redis = Redis::connection();
			$this->redis->setex('name', '60', 'Ganesha');
			$name = $this->redis->get('name');
			return $name;
	}
	public function redis(){
		$client = new Predis\Client(Config::get('database.redis'));
		$client->set('library', 'Jai ganesha');
		$retval = $client->get('library');
		return var_dump($retval);
	}


}
