<?php
namespace App\Service\Real;

use App\Models\CalendarPlant;
use App\Models\DbModels\DbPlant;
use App\Models\DbModels\DbPlantTag;
use App\Models\DbModels\DbUserPlant;
use App\Models\PlantFull;
use App\Models\PlantShort;
use App\Service\IDbPlantService;
use DateTime;

/**
 * Class DbPlantService
 * Сервис по работате с растениями в БД
 */
class DbPlantService implements IDbPlantService
{

    public function getAllPlants(): array
    {
        echo("<script>console.log('getAllPlants');</script>");

        $dbData = DbPlant::with('tags')->orderBy('name')->get();
        $data = [];
        foreach ($dbData as $dbItem){
            $data[] = $this->getPlantFromDbPlant($dbItem);
        }
        return $data;
    }
    public function getPlant(int $id): PlantFull
    {
        echo("<script>console.log('getPlant');</script>");

        $dbItem = DbPlant::with('tags')->where('id',$id)->first();
        $item = new PlantFull();
        $item->id = $dbItem['id'];
        $item->name = $dbItem['name'];
        $item->addDate = $dbItem['add_date'];
        $item->shortInfo = $dbItem['short_info'];
        $item->fullInfo = $dbItem['full_info'];
        $item->photoSmallPath = $dbItem['photo_small_path'];
        $item->photoBigPath = $dbItem['photo_big_path'];
        $item->wateringDays = $dbItem['watering_days'];
        $item->manuringDays = $dbItem['manuring_days'];
        $item->pestControlDays = $dbItem['pest_control_days'];
        $item->tags = [];
        foreach ($dbItem['tags'] as $dbTag)
            $item->tags[] = $dbTag['tag'];
        return $item;
    }

    /**
     * @throws \ErrorException
     */
    public function updatePlant(PlantFull $plant)
    {
        echo("<script>console.log('updatePlant');</script>");
        $exists = DbPlant::where('name', $plant->name)->get();
        foreach ($exists as $exist) {
           if ($exist["id"] != $plant->id)
               throw new \ErrorException('Растение с таким именем уже сущетсвует');
        }
        $dbPlant = DbPlant::first('id',$plant->id);
        $dbPlant['name'] = $plant->name;
        $dbPlant['short_info'] = $plant->shortInfo;
        $dbPlant['full_info'] = $plant->fullInfo;
        $dbPlant['photo_small_path'] = $plant->photoSmallPath;
        $dbPlant['photo_big_path'] = $plant->photoBigPath;
        $dbPlant['watering_days'] = $plant->wateringDays;
        $dbPlant['manuring_days'] = $plant->manuringDays;
        $dbPlant['pest_control_days'] = $plant->pestControlDays;
        $dbPlant->save();

        $dbTags = DbPlantTag::where('plant_id',$plant->id)->get();
        foreach ($plant->tags as $tag){
           foreach ($dbTags as $dbTag){
               if($dbTag['tag'] === $tag)
                   continue 2;
           }
           $newTag = [];
           $newTag["plant_id"] = $plant->id;
           $newTag["tag"] = $tag;
           DbPlantTag::create($newTag);
        }
        foreach ($dbTags as $dbTag){
            foreach ($plant->tags as $tag) {
                if($dbTag['tag'] === $tag)
                    continue 2;
            }
            $dbTag->delete();
        }
    }
    public function insertPlant(PlantFull $plant): int
    {
        echo("<script>console.log('insertPlant');</script>");
    }
    /**
     * @throws \ErrorException
     */
    public function deletePlant(int $plantId)
    {
        echo("<script>console.log('deletePlant');</script>");
        if(DbUserPlant::where('plant_id',$plantId)->count() > 1)
            throw new \ErrorException('Растение используется пользователями');
        $dbTags = DbPlantTag::where('plant_id',$plantId)->get();
        foreach ($dbTags as $dbTag)
            $dbTag->delete();

        $dbPlant = DbPlant::first('id',$plantId);
        $dbPlant->delete();
    }
    public function addPlantToFavor(int $userId, int $plantId)
    {
        echo("<script>console.log('addPlantToFavor');</script>");
        if(DbUserPlant::where('user_id',$userId)->where('plant_id',$plantId)->count() > 0)
            return false;
        $dbUserPlant = [];
        $dbUserPlant['user_id'] = $userId;
        $dbUserPlant['plant_id'] = $plantId;
        $plant = DbUserPlant::create($dbUserPlant);
        return $plant;

    }
    public function removePlantFromFavor(int $userId, int $plantId)
    {
        echo("<script>console.log('removePlantFromFavor');</script>");
        $dbUserPlant = DbUserPlant::where('user_id',$userId)->where('plant_id',$plantId)->first();
        if($dbUserPlant === null)
            return;
        $dbUserPlant->delete();
    }
    public function getFavorPlants(int $userId): array
    {
        echo("<script>console.log('getFavorPlants');</script>");
        $dbData = DbUserPlant::with("plant")->where('user_id',$userId)->get();
        $data = [];
        foreach ($dbData as $dbItemUserPlant){
            $data[] = $this->getPlantFromDbPlant($dbItemUserPlant['plant']);
        }
        return $data;
    }
    public function getFavorCalendar(int $userId): array
    {
        echo("<script>console.log('getFavorCalendar');</script>");
        $dbData = DbUserPlant::with("plant")->where('user_id',$userId)->get();
        foreach ($dbData as $dbItemUserPlant){
            $dataPlant[] = $this->getPlantFromDbPlant($dbItemUserPlant['plant']);
        }
        $date=[];
        $begin = new DateTime('first day of this month');
        $end = new DateTime('last day of this month');
        $totalDays = $end->diff($begin)->d+1;

        for($day=1; $day <= $totalDays; $day++){
            $item = new CalendarPlant();
            $item->dayNum = $day;
            $item->plantsToWatering = [];
            $item->plantsToManuring = [];
            $item->plantsToPesting = [];
            foreach ($dataPlant as $plant){
                if( $day % $plant->wateringDays === 0)
                    $item->plantsToWatering[] = $plant;
                if( $day % $plant->manuringDays === 0)
                    $item->plantsToManuring[] = $plant;
                if( $day % $plant->pestControlDays === 0)
                    $item->plantsToPesting[] = $plant;
            }
            $date[] = $item;
        }
//        dd($date);
        return $date;
    }
    private function getPlantFromDbPlant(DbPlant $dbPlant) : PlantShort
    {
        $item = new PlantShort();
        $item->id = $dbPlant['id'];
        $item->name = $dbPlant['name'];
        $item->addDate = \DateTime::createFromFormat('Y-m-d',$dbPlant['add_date'])->format('d.m.Y');
        $item->shortInfo = $dbPlant['short_info'];
        $item->photoSmallPath = $dbPlant['photo_small_path'];
        $item->wateringDays = $dbPlant['watering_days'];
        $item->manuringDays = $dbPlant['manuring_days'];
        $item->pestControlDays = $dbPlant['pest_control_days'];
        $tags = [];
        foreach ($dbPlant['tags'] as $dbTag)
            $tags[] = $dbTag['tag'];
        $item->tags = implode(", ",$tags);
        return $item;
    }
}
