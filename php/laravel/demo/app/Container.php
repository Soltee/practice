<?php

namespace App;

class Container {

	protected $bindings = [];


	public function bind($key, $value)
	{
		
		$this->bindings[$key]   = $value;

	}


	public function make($key)
	{

		if(! isset($this->bindings[$key])) {

			return null;
	
		}

		if(is_callable($this->bindings[$key])) {

			return call_user_func($this->bindings[$key]);

		}

		return $this->bindings[$key]; 
	}

}