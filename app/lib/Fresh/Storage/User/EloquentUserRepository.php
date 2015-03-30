<?php namespace Fresh\Storage\User;

use User;
class EloquentUserRepository implements UserRepository{
	
	 protected $model;
 
  /**
   * Constructor
   */
  public function __construct(User $model)
  {
    $this->model = $model;
  }
	
	public function all(){
		return User::all();
	}

	public function find($id){
		return User::find($id);
	}

	public function create($input){	
		return User::create($input);
	}

	
	public static function where($array){
		foreach ($array as $key => $value) {

			User::where($key,$value)->get();
		}

		return $user;
		
	}

	public function getFirstBy($key, $value, array $with = array())
	{
	  return $this->make($with)->where($key, '=', $value)->first();
	}

	public function make(array $with = array())
	{
	  return $this->model->with($with);
	}

	public function instance(){
		
		return new User;
	}
}