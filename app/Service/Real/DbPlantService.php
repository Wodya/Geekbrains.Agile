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

    public function getPlant(): PlantFull
    {
        return new PlantFull();
    }
}
