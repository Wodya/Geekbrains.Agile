<?php
namespace App\Http\Controllers;

use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request, IDbPlantService $dbPlant)
    {
        $plantList = $dbPlant->getAllPlants();
        return view('plants.plantsList',['plantsList' => $plantList]);
    }
    public function onePlant($id, IDbPlantService $dbPlant)
    {
        $onePlant = $dbPlant->getPlant($id);
        // return "<h2>Отобразить запись одного товара с ID = {$id}</h2>";

        // dd($onePlant);
      return view('plants.onePlant', ['onePlant' => $onePlant]);
    }
}
