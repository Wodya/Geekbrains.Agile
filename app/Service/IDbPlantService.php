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
     * @param int $id
     * @return PlantFull
     */
    public function getPlant(int $id) : PlantFull;
    /**
     * Сохраняет подробную информацию о существующем растении
     */
    public function updatePlant(PlantFull $plant);
    /**
     * Вставляет подробную информацию о растении, которого нет в БД
     * @return int - Id вставленного растения
     */
    public function insertPlant(PlantFull $plant) : int;
    /**
     * Удаляет растение
     */
    public function deletePlant(int $plantId);
}
