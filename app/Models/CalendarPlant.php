<?php
namespace App\Models;

class CalendarPlant extends ModelCommon
{
    /**
     * @var int
     */
    public $dayNum;
    /**
     * @var string[]
     */
    public $plantsToWatering;
    public $plantsToManuring;
    public $plantsToPesting;
}
