<?php
namespace App\Service\Mock;

use App\Models\PlantFull;
use App\Models\PlantShort;
use App\Service\IDbPlantService;

/**
 * Class DbPlantServiceMock
 * Фэйковый сервис по работате с растениями в БД
 */
class DbPlantServiceMock implements IDbPlantService
{

    public function getAllPlants(): array
    {
        $plant1 = new PlantShort();
        $plant1->id = 1;
        $plant1->name = "Растение 1";
        $plant1->shortInfo = "Дикорастущее растение средней полосы";
        $plant1->photoSmallPath = "image1.jpg";
        $plant1->tags = "Солнцелюбивое, дикорастущее";

        $plant2 = new PlantShort();
        $plant2->id = 2;
        $plant2->name = "Растение 2";
        $plant2->shortInfo = "Дикорастущее растение средней полосы";
        $plant2->photoSmallPath = "image1.jpg";
        $plant2->tags = "Солнцелюбивое, дикорастущее";

        $plant3 = new PlantShort();
        $plant3->id = 3;
        $plant3->name = "Растение 3";
        $plant3->shortInfo = "Дикорастущее растение средней полосы";
        $plant3->photoSmallPath = "image1.jpg";
        $plant3->tags = "Солнцелюбивое, дикорастущее";

        return [$plant1, $plant2, $plant3, $plant1, $plant2, $plant3, $plant1, $plant2, $plant3];

    }

    public function getPlant(): PlantFull
    {
        $plant1 = new PlantFull();
        $plant1->id = 1;
        $plant1->name = "Растение 1";
        $plant1->shortInfo = "Дикорастущее растение средней полосы";
        $plant1->fullInfo = "Дикорастущее растение средней полосы. Произростает в каких-то широтах, на каких-то берегах";
        $plant1->photoSmallPath = "image1.jpg";
        $plant1->tags = ["Солнцелюбивое", "Дикорастущее"];
    }
}
