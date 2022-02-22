<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Services\Payment;
use App\Interfaces\PaymentContract;

use App\Facade;
// use App\Example;
use Facades\App\Example;

// Service Container num 10.
use App\Container;
use App\Services\PaypalGateway;
use App\Services\StripeGateway;
use App\Services\CustomPaymentGateway;
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
/************* Service Container *************/
    // Auto Resolving Feature

    // Route::get('/', function(Payment $payment) {
        // Automatically creates and instance
            // dd($payment);

        // 1. Example : Payment Service
            // dd($payment->process());

        // 2. Examples : Payment Service has an dependency and IoC got you covered.
            // dd($payment->process());

        // 3.IoC captures the objects of all dependencies using app()
            // Laravel has injected the instance of the Payment and it's dependencies already 
            // So no initialization REQUIRED..
                // dd(app());

        // 4.Depdencies of Dependencies 
        // 4.Doesnot necessarily resolved the depdendencies except dependency is a class
            // 4.1 Example
            // Payment has class Dependency called PaymentGateway
            // Payment Gateway required secretKey on __construct
            // Returns Error saying PaymentGateway cannot reslove the secretkey dependency
            // Laravel Container doesnot understand what to inject in the PaymentGat dependency
                // dd(app());
                // dd($payment);

            // To RESOLVED the ISSUE, 
                // Use BINDING  
                // In AppServiceProvider.php , register method
                // dd(app());
                // dd($payment);
    // });

    // Route::get('/', function(PaymentContract $payment) {

        // 5. Injecting Dependencies using Interfaces
            // Binding the interfaces
            // Interfaces cannot be instantiated
            // Advantages
                // .Only one place, i.e AppServiceProvider.php
                // .Do based on conditons Also
                
                // dd($payment);

        // 6. Using App Helper Function
            // 1. app();
                // dd(app(PaymentContract::class));
            // 2. (app()->make());
                // dd(app()->make(PaymentContract::class));
            // 3. resolve();
                // dd(resolve(PaymentContract::class));
    // });

    // Route::get('/', function(){
        // 7. Use string instead of class
                // Eg. use 'Payment' instead of Payment::class 
                    // in AppServiceController
                    // in dd(resolve('Payment'))
                        // dd(resolve('Payment'));

        //  8. Get Same Refrencing Number i.e #269
            // Returns Different refrence, diff instance
                // dd(resolve('Payment'), resolve('Payment')); 

            // Return same refrence 269, same 
                // if in AppServiceProvider.php, set true as second parameter
                // dd(resolve('Payment'), resolve('Payment')); 
    // });

    Route::get('/', function() {

        // 9. Extending Bindings
            // $this->app->bind
            // then again, extend it using $this->app->extend('', fn);
            // dd(resolve(PaymentContract::class), resolve(PaymentContract::class)); 


        // 10. Create own container basic
            // How it works behind the scence;

            $container = new Container();

            $container->bind(PaymentContract::class, function(){

                // return new PaypalGateway('paypal__secret');

                // return new StripeGateway('stripe__secret');

                return new CustomPaymentGateway('custom__secret');

            });

            // Now resolve
            $payment   = $container->make(PaymentContract::class);

            dd($payment);
    });



/************* Facades *************/
    // Route::get('/', function () {
    //     //******* Alias 
    //         // - config/app on alias array

    //     //******* Implement Own Facade
    //         // - Return error if __callStatic($name, $arguments) fn isn't there
    //         // dd(Facade::touch([1, 2, 3])); 

    //     //******* Real Time Facades
    //         // - Use Facades\App\Example instead of App\Example;
    //         // - Then laravel will create a facade and cache it 
    //         // - The cached facade can be found in storage/framework/cache/{facadeName.php}
    //         // dd(Example::process());
    // });

