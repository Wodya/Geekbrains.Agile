<?php
namespace App\Http\Controllers;

use App\Models\PlantFull;
use App\Service\IDbPlantService;
use Illuminate\Http\Request;

class LkController extends Controller
{
    public function index(Request $request, IDbPlantService $dbPlant)
    {
        $plants = $dbPlant->getAllPlants();
        return view('plants.chosenTable',['plants' => $plants]);
    }
    

}
