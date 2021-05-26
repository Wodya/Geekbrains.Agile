<?php


namespace App\Http\Controllers;


use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function deletePlant(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->deletePlant(1);
    }
    public function addPlantToFavor(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->addPlantToFavor(1, 2);
    }
    public function removePlantFromFavor(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->removePlantFromFavor(1,2);
    }
}
