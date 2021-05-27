<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Класс "Растение"
 */
class PlantFull extends Model
{
    use HasFactory;

//    protected $table = 'plants'; // TODO определить правильное имя базы данных

    protected $fillable = [
        'name',
        'shortInfo',
        'fullInfo',
        'photoSmallPath',
        'tags'
    ];
//    /**
//     * @var int
//     */
//    public $id;
//    /**
//     * @var string
//     */
//    public $name;
//    /**
//     * @var string
//     */
//    public $shortInfo;
//    /**
//     * @var string
//     */
//    public $fullInfo;
////    как ухаживать, грунт, цветение, опасное или нет
//    /**
//     * @var string
//     */
//    public $photoSmallPath;
//    /**
//     * @var string
//     */
//    public $photoBigPath;
//    /**
//     * @var string[]
//     */
//    public $tags;
    public function getAllPlants(): array
    {
        return DB::$table('plant')->get();
    }
}
