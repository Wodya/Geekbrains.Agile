<?php

namespace App\Http\Controllers;

use App\Service\IDbPlantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MyPlantsController extends Controller
{
    public function favorPlants(Request $request, IDbPlantService $dbPlant)
    {
        $plants = $dbPlant->getFavorPlants(1);
        return view('plants.chosenTable',['plants' => $plants]);
    }
    public function addFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->addPlantToFavor($userId, $plantId);
        echo('$userId = ' . $userId);
        echo('$plantId = ' . $plantId);
    }

    public function removeFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->removePlantFromFavor($userId, $plantId);
    }
    public function setUserPlantDone(int $userId, int $plantId, int  $actionId, string $date, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->setUserPlantDone($userId, $plantId, $actionId, $date);
    }
    public function resetUserPlantDone(int $userId, int $plantId, int  $actionId, string $date, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->resetUserPlantDone($userId, $plantId, $actionId, $date);
    }
    public function calendar(Request $request, IDbPlantService $dbPlant)
    {
        $calendar = $dbPlant->getFavorCalendar(1);
        return view('plants.calendarTable', ['dates' => $calendar]);
    }
}
