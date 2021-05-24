<?php
namespace App\Providers;

use App\Service\Real\DbPlantService;
use App\Service\IDbPlantService;
use App\Service\Mock\DbPlantServiceMock;

class DbPlantServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind( IDbPlantService::class,function (){
            return new DbPlantServiceMock();
        });
    }
}