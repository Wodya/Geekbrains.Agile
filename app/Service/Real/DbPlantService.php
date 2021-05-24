<?php
namespace App\Service\Real;

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

        return [];
    }
    public function getPlant(int $id): PlantFull
    {
        return new PlantFull();
    }
    public function updatePlant(PlantFull $plant)
    {
        // TODO: Implement UpdatePlant() method.
    }

    public function insertPlant(PlantFull $plant): int
    {
        // TODO: Implement InsertPlant() method.
    }

    public function deletePlant(int $plantId)
    {
        // TODO: Implement DeletePlant() method.
    }
}
