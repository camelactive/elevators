<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedElevators = $_POST["elevators-select"];
    $selectedFloors = $_POST["floors-select"];
    $selectedWeightLimits = $_POST["weight-limits-select"];
    echo "Выбрано количество лифтов: " . $selectedElevators;
    echo "Выбрано количество этажей: " . $selectedFloors;
    echo "Выбрана грузоподъемность: " . $selectedWeightLimits;
} else {
    // Обработка случая, когда скрипт запущен без отправки формы
}
