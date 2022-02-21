<?php

namespace App;

class Facade 
{
	public static function __callStatic($methodName, $arguments)
	{
		// dd($arguments);

		// dd(app('config')); //dump config server provider

		$instance = app(static::getFacadeAccessor());

		return $instance->methodName(...$arguments);

	} 

	protected static function getFacadeAccessor()
	{
		
	}
}