<?php

namespace App\Http\Controllers;

use App\Service\IDbPlantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MyPlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, IDbPlantService $dbPlant)
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
}
