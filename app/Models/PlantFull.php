<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Класс "Растение"
 */
class PlantFull
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $addDate;
    /**
     * @var string
     */
    public $shortInfo;
    /**
     * @var string
     */
    public $fullInfo;
//    как ухаживать, грунт, цветение, опасное или нет
    /**
     * @var string
     */
    public $photoSmallPath;
    /**
     * @var string
     */
    public $photoBigPath;
    /**
     * @var string
     */
    public $wateringDays;
   /**
     * @var string[]
     */
    public $tags;
}
