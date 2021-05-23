<?php
namespace App\Models;
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
    public $shortInfo;
    /**
     * @var string
     */
    public $fullInfo;
    /**
     * @var string
     */
    public $photoSmallPath;
    /**
     * @var string
     */
    public $photoBigPath;
    /**
     * @var string[]
     */
    public $tags;
}
