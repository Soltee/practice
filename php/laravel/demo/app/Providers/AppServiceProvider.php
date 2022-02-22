<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\PaymentGateway;

use App\Interfaces\PaymentContract;
use App\Services\PaypalGateway;
use App\Services\StripeGateway;

use App\Services\CustomPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Tell Laravel, that when PaymentGatway class is needed,
        // Inject the instance and pass the secret key requred.
            // $this->app->bind(PaymentGateway::class, function(){
            //     return new PaymentGateway("3859234fsfr938r23r#^#&_&#*YFE");
            // });

        // 5. Injecting Dependencies using Interfaces
            // $this->app->bind(PaymentContract::class, function(){
            //     // Based on Request
            //         if(request()->method === 'stripe'):
            //             return new StripeGateway("3859234fsfr938r23r#^#&_&#*YFE");
            //         endif;

            //         return new PaypalGateway("3859234fsfr938r23r#^#&_&#*YFE");
            // });

        // 7. Use String
            // $this->app->bind('Payment', function(){
            //     // Based on Request
            //         if(request()->method === 'stripe'):
            //             return new StripeGateway("3859234fsfr938r23r#^#&_&#*YFE");
            //         endif;

            //         return new PaypalGateway("3859234fsfr938r23r#^#&_&#*YFE");
            // });


        // 8. Use String , 2 ways
            // 8.1 singleton saying, using true as 2nd parameter
            // $this->app->bind('Payment', function(){
            //     // Based on Request
            //         if(request()->method === 'stripe'):
            //             return new StripeGateway("3859234fsfr938r23r#^#&_&#*YFE");
            //         endif;

            //         return new PaypalGateway("3859234fsfr938r23r#^#&_&#*YFE");
            // }, true);

            //8.2 Using singleton function
            // $this->app->singleton('Payment', function(){
            //     // Based on Request
            //         if(request()->method === 'stripe'):
            //             return new StripeGateway("3859234fsfr938r23r#^#&_&#*YFE");
            //         endif;

            //         return new PaypalGateway("3859234fsfr938r23r#^#&_&#*YFE");
            // }, true);

        // 9. Extending Bindings 

            $this->app->bind(PaymentContract::class, function(){
                // Based on Request
                    if(request()->method === 'stripe'):
                        return new StripeGateway("3859234fsfr938r23r#^#&_&#*YFE");
                    endif;

                    return new PaypalGateway("3859234fsfr938r23r#^#&_&#*YFE");
            });
        
            $this->app->extend(PaymentContract::class, function(){

                    return new CustomPaymentGateway("___secret#^#&_&#*YFE");

            });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
