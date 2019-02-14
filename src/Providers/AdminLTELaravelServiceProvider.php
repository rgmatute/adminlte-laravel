<?php

namespace Rgmatute\AdminLTELaravel\Providers;
use Illuminate\Support\ServiceProvider;

/**
 * Class AdminLTELaravelServiceProvider.
 */

class AdminLTELaravelServiceProvider extends ServiceProvider {

    /**
    * Register the application services.
    */

    public function register(){
        if (!defined('ADMINLTE_PATH')) {
            define('ADMINLTE_PATH', realpath(__DIR__.'/../../'));
        }
    }

    public function boot(){
        $this->publishAdminLTE('rgmatute');
    }

    private function publishAdminLTE($tag){
        $this->publishes([
            ADMINLTE_PATH.'/config/adminlte.php'        => config_path('adminlte.php'),
            ADMINLTE_PATH.'/config/adminlte_all_configuration.php'=> config_path('adminlte_all_configuration.php'),
            ADMINLTE_PATH.'/public/Template'            => public_path('Template'),
            ADMINLTE_PATH.'/public/js.min'              => public_path('js.min'),
            ADMINLTE_PATH.'/resources/views/Template'   => resource_path('views/Template'),
            ADMINLTE_PATH.'/resources/views/AdminlteExamples'   => resource_path('views/AdminlteExamples'),
            ADMINLTE_PATH.'/routes/adminlteExamples.php'        => base_path('routes/adminlteExamples.php'),
        ],$tag);
    }

}
