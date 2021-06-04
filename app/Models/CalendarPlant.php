<?php
namespace App\Models;

class CalendarPlant extends ModelCommon
{
    /**
     * @var int
     */
    public $dayNum;
    /**
     * @var string
     */
    public $date;
    /**
     * @var string
     */
    public $dayInfo;
    /**
     * @var CalendarPlantRow[]
     */
    public $plantsToDo;
}
