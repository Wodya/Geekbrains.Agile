<?php


namespace App\Http\Controllers;


use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function deletePlant(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->deletePlant(1);
        //copied
    }
    public function addPlantToFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->addPlantToFavor($userId, $plantId);
        //copied
    }
    public function removePlantFromFavor(Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->removePlantFromFavor(1,2);
        //copied
    }
    public function getFavorPlants(Request $request, IDbPlantService $dbPlant)
    {
        foreach ($dbPlant->getFavorPlants(1) as $item)
            echo "{$item->id}  ; {$item->name}  ; {$item->addDate}  ; {$item->photoSmallPath}  ; {$item->shortInfo}  ; {$item->wateringDays}  ; {$item->tags}  <BR>";
    }
    public function getFavorCalendar(Request $request, IDbPlantService $dbPlant)
    {
        $calendar = $dbPlant->getFavorCalendar(1);
        foreach ($calendar as $item){
            $plants = implode(',',$item->plantsToWatering);
            echo "{$item->dayNum}  ; {$plants} <BR>";
        }
    }
}
