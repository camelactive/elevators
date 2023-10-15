<?php
namespace PageInfo;
class PageInfo
{
   public static function infoInitElevatorsCountSetup()
    {
        $minElevatorsRange = 1;
        $maxElevatorsRange = 4;
        $maxElevators = range($minElevatorsRange, $maxElevatorsRange);
        $options = "";
        foreach ($maxElevators as $Elevators) {
            $options .= '<option value="'.$Elevators.'">'.$Elevators.'</option>';
        }
        $elevatorsSetupInfo = '<div class="setup-block">
            <div>Выбери колличество лифтов от '. $minElevatorsRange .' до ' . $maxElevatorsRange . '</div>
            <select class="elevators-select elevators-select-js" name="elevators-select"  id="elevators-select">'
            .$options.
            '</select>
            </div>';
        return $elevatorsSetupInfo;
    }

    public static function infoInitFloorsCountSetup()
    {
        $minFloorsRange = 5;
        $maxFloorsRange = 18;
        $maxFloors = range($minFloorsRange, $maxFloorsRange);
        $options = "";
        foreach ($maxFloors as $floorNumber) {
            $options .= '<option value="'.$floorNumber.'">'.$floorNumber.'</option>';
        }
        $floorsSetupInfo = '<div class="setup-block">
            <div>Выбери колличество этажей от '. $minFloorsRange .' до ' . $maxFloorsRange . '</div>
            <select class="floors-select floors-select-js" name="floors-select" id="floors-select">'
            .$options.
            '</select>
            </div>';
        return $floorsSetupInfo;
    }
    public static function infoInitWeightLimitsSetup()
    {
        $minPeoplesRange = 2;
        $maxPeoplesRange = 9;
        $maxPeoples = range($minPeoplesRange, $maxPeoplesRange);
        $options = "";
        foreach ($maxPeoples as $iPeoples) {
            $options .= '<option value="'.$iPeoples.'">'.$iPeoples.'</option>';
        }
        $weightLimitsInfo = '<div class="setup-block">
            <div>Выбери грузоподьемность  от ' . $minPeoplesRange .' до '. $maxPeoplesRange.' людей</div>
            <select class="weight-limits-select weight-limits-select-js" name="weight-limits-select" id="weight-limits-select">'
            .$options.
            '</select>
            </div>';
        return $weightLimitsInfo;
    }
}