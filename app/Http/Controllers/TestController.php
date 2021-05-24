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
    public function onePlant(Request $request, IDbPlantService $dbPlant)
    {
        return view('plants.onePlant');
    }
}
