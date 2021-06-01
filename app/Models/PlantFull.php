<?php
namespace App\Models;
/**
 * Класс "Растение"
 */
class PlantFull extends ModelCommon
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
     * @var bool
     */
    public $isFavor;   /**
     * @var string[]
     */
    public $tags;

    public $manuringDays;
    /**
      * @var string[]
      */
      public $pestControlDays;
    /**
      * @var string[]
      */
}
