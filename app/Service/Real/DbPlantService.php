<?php
namespace App\Service\Real;

use App\Models\DbModels\DbPlant;
use App\Models\DbModels\DbPlantTag;
use App\Models\PlantFull;
use App\Models\PlantShort;
use App\Service\IDbPlantService;

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
            $item = new PlantShort();
            $item->id = $dbItem['id'];
            $item->name = $dbItem['name'];
            $item->shortInfo = $dbItem['short_info'];
            $item->photoSmallPath = $dbItem['photo_small_path'];
            $tags = [];
            foreach ($dbItem['tags'] as $dbTag)
                $tags[] = $dbTag['tag'];
            $item->tags = implode(", ",$tags);
            $data[] = $item;
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
        $item->shortInfo = $dbItem['short_info'];
        $item->fullInfo = $dbItem['full_info'];
        $item->photoSmallPath = $dbItem['photo_small_path'];
        $item->photoBigPath = $dbItem['photo_big_path'];
        $item->tags = [];
        foreach ($dbItem['tags'] as $dbTag)
            $item->tags[] = $dbTag['tag'];
        return $item;
    }
    public function updatePlant(PlantFull $plant)
    {
        echo("<script>console.log('updatePlant');</script>");
        $exists = DbPlant::where('name', $plant->name)->get();
        foreach ($exists as $exist) {
           if ($exist["id"] !== $plant->id)
               throw new \ErrorException('Растение с таким именем уже сущетсвует');
        }
        $dbPlant = DbPlant::first('id',$plant->id);
        $dbPlant->name = $plant->name;
        $dbPlant->short_info = $plant->shortInfo;
        $dbPlant->full_info = $plant->fullInfo;
        $dbPlant->photo_small_path = $plant->photoSmallPath;
        $dbPlant->photo_big_path = $plant->photoBigPath;
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

    public function deletePlant(int $plantId)
    {
        echo("<script>console.log('deletePlant');</script>");
    }
}
