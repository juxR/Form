<?php namespace jux\form;

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

              $this->app->bindShared('formbuild', function($app){
                 return new FormBuild($app['form']);
             });

          }
      }