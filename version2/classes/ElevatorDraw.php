<?php

namespace ElevatorVisual;

class ElevatorVisual
{
     static function randomFloor(){
        $floor = intval(rand(1,18));
        return  $floor;
    }
    public static function elevatorDraw(){
        return '
          <div class="elevator">
                <div  class="elevator-main-block">
                    <div class="elevator-info-panel">
                        <div class="elevator-info-panel-floor">' . self::randomFloor() .'</div>
                        <div class="elevator-info">
                            <div class="elevator-info-up">
                                <img src="assets/img/navigate-up-2.svg">
                            </div>
                            <div class="elevator-info-down">
                                <img src="assets/img/navigate-up-2.svg">
                            </div>
                        </div>
                    </div>
                    <div class="elevator-doors">
                        <div class="elevator-left-door"></div>
                        <div class="elevator-right-door"></div>
                    </div>
                </div>
                <div class="elevator-control-panel">
                    <div class="elevator-control-panel-button" onclick="elevatorCall()"></div>
                </div>
            </div>';
    }
}