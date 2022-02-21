<?php

use Illuminate\Support\Facades\Route;
use App\Facade;
// use App\Example;
use Facades\App\Example;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // Facades ********************/

        //******* Alias 
            // - config/app on alias array

        //******* Implement Own Facade
            // - Return error if __callStatic($name, $arguments) fn isn't there
            // dd(Facade::touch([1, 2, 3])); 

        //******* Real Time Facades
            // - Use Facades\App\Example instead of App\Example;
            // - Then laravel will create a facade and cache it 
            // - The cached facade can be found in storage/framework/cache/{facadeName.php}
            dd(Example::process());

});

