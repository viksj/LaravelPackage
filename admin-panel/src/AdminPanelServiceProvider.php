<?php
namespace Himanshu\Adminpanel;

use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        
    }
}