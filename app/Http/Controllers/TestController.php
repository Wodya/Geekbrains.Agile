<?php


namespace App\Http\Controllers;


use App\Service\IDbPlantService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function deletePlant(Request $request)
    {
        $dbPlant = App::make(IDbPlantService::class);
        $dbPlant->deletePlant(1);
        //copied
    }
    public function addPlantToFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $plant = $dbPlant->addPlantToFavor($userId, $plantId);
        if($plant) {
            return Redirect::route('catalog')->with('success', 'Растение успешно добавлено');
        }
        return  Redirect::route('catalog')->with('error', 'Такое растение уже добавлено в Избранное');
    }
    public function removePlantFromFavor($userId, $plantId, Request $request, IDbPlantService $dbPlant)
    {
        $dbPlant->removePlantFromFavor($userId, $plantId);
        return Redirect::route('myPlants.index')->with ('success', "Растение успешно удалено из Избранного");
    }
    public function getFavorPlants(Request $request, IDbPlantService $dbPlant)
    {
        foreach ($dbPlant->getFavorPlants(1) as $item)
            echo "{$item->id}  ; {$item->name}  ; {$item->addDate}  ; {$item->photoSmallPath}  ; {$item->shortInfo}  ; {$item->wateringDays}  ; {$item->tags}  <BR>";
    }
    public function getFavorCalendar(Request $request, IDbPlantService $dbPlant)
    {
        $calendar = $dbPlant->getFavorCalendar(1);
//        foreach ($calendar as $item){
//            $plants = implode(',',$item->plantsToWatering);
//            echo "{$item->dayNum}  ; {$plants} <BR>";
//        }
        return view('plants.calendarTable', ['dates'=>$calendar]);
    }
    public function testCalendar(){
        $dataCalendar = [
            1 => ['plants'=>['орхидея', 'кактус', 'лиана'], 'actions'=>['полив', 'полив', 'полив']],
            2 => ['plants'=>[], 'actions'=>[]],
            3 => ['plants'=>[], 'actions'=>[]],
            4 => ['plants'=>['орхидея'], 'actions'=>['полив']],
            5 => ['plants'=>['лиана'], 'actions'=>['полив']],
            6 => ['plants'=>[], 'actions'=>[]],
            7 => ['plants'=>['орхидея'], 'actions'=>['полив']],
            8 => ['plants'=>[], 'actions'=>[]],
            9 => ['plants'=>[], 'actions'=>[]],
            10 => ['plants'=>['лиана', 'кактус', 'орхидея'], 'actions'=>['полив', 'удобрение', 'полив']],
        ];
        return view('plants.calendarTable', ['dates'=>$dataCalendar]);
    }
}
