<?php
namespace App\Http\Controllers;

use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request, IDbPlantService $dbPlant)
    {
        $plantList = $dbPlant->getAllPlants();
        return view('test.index',['PlantList' => $plantList]);
    }
}
