<?php
namespace App\Service;
use App\Models\PlantFull;
use App\Models\PlantShort;

interface IDbPlantService{
    /**
     * Возвращает список растений
     * @return PlantShort[]
     */
    public function getAllPlants() : array;

    /**
     * Возвращает подробную информацию об одном растении
     * @return PlantFull
     */
    public function getPlant() : PlantFull;
}
