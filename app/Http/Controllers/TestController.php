<?php
namespace App\Http\Controllers;

use App\Models\PlantFull;
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
    public function testUpdate(Request $request, IDbPlantService $dbPlant)
    {
        $plant = new PlantFull();
        $plant->id = 1;
        $plant->name = 'Ромашка';
        $plant->shortInfo = "Душенька! Павел Иванович! — вскричал.";
        $plant->fullInfo = "Здесь был испущен — очень приятный человек? — Чрезвычайно приятный, и какой умный, какой начитанный человек! Мы у — всех делается. Все что ни было печалям, из которых по.";
        $plant->photoSmallPath='image1.jpg';
        $plant->photoBigPath='image1.png';
        $plant->tags[] = 'Хорошее';
        $plant->tags[] = 'Яркое';
        $dbPlant->updatePlant($plant);
    }

}
