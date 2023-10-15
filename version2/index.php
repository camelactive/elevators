<?php
require_once "classes/PageInfo.php";
require_once "classes/ElevatorDraw.php";
use PageInfo\PageInfo;
use ElevatorVisual\ElevatorVisual;
?>
<link rel="stylesheet" href="style.css">
<body>
    <form class="form" action="data/data.php" method="POST">
        <?=PageInfo::infoInitElevatorsCountSetup()?>
        <?=PageInfo::infoInitFloorsCountSetup()?>
        <?=PageInfo::infoInitWeightLimitsSetup()?>
        <button class="submit-button" type="submit" id="submit-button">Готово</button>
    </form>
</div>
<div class="main-block main-block-js">
    <?=ElevatorVisual::elevatorDraw()?>
</div>
<script src="script.js"></script>
</body>
</html>