<?php
namespace BuildingSetup;

use Elevator\Elevator;

class BuildingSetup
{
    public $elevatorsCount;
    public $floorsCount;
    public $elevatorWeightLimit;

    public function __construct($elevatorsCount, $floorsCount, $elevatorWeightLimit)
    {
        $this->elevatorsCount = $elevatorsCount;
        $this->floorsCount = $floorsCount;
        $this->elevatorWeightLimit = $elevatorWeightLimit;
    }
    function elevatorInit($elevatorsCount,$elevatorWeightLimit){
        return $elevators = $elevatorsCount;
    }

}
