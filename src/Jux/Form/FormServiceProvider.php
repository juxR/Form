<?php namespace Jux\Form;

use \Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider{

    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('jux/form');
    }


    public function register(){

        $this->app['jform'] = $this->app->share(function( $app ){

                return new FormBuild;

        });

     /*   $this->app->bindShared('FormBuild', function($app){

         return new FormBuild( $app['form'] );

     });*/

    }

    public function provides(){

        return array('jux');

    }
}