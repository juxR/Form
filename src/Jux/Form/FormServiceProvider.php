<?php namespace Jux\Form;

use \Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider{

    protected $defer = true;

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

                $this->app->bindShared('FormBuild', function($app){

               return new FormBuild( $app['form'] );

           });

          }
      }