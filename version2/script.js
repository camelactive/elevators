let callButtonDoor = document.querySelector("elevator-control-panel-button"),
    leftDoor = document.querySelector(".elevator-left-door"),
    rightDoor = document.querySelector(".elevator-right-door"),
    doorsSound = new Audio("assets/sounds/soundscrate-elevator-door-open-1.mp3");
    elevatorMovingSound = new Audio("assets/sounds/elevatoronmove.mp3");

statusChange();
function doorsOpen() {
    if (status !== "inProgress") {
        status = "inProgress";
        leftDoor.style.transition = "width 3s";
        rightDoor.style.transition = "width 3s";
        leftDoor.style.width = "5%";
        rightDoor.style.width = "5%";
        doorsSound.play();
        elevatorMovingSound.pause();
        setTimeout(doorsClose, 8000);
    }
}
function doorsClose() {
    leftDoor.style.transition = "width 3s";
    rightDoor.style.transition = "width 3s";
    leftDoor.style.width = "50%";
    rightDoor.style.width = "50%";
    doorsSound.play();
    setTimeout(statusChange, 3000);
}

function statusChange() {
    status = "ready";
}

function elevatorCall() {
    let panelFloorElement = document.querySelector(".elevator-info-panel-floor")
    let panelFloorNumber = document.querySelector(".elevator-info-panel-floor").innerHTML;
    if (panelFloorNumber > 1) {
    panelFloorNumber--;
    panelFloorElement.innerText = panelFloorNumber;
    elevatorMovingSound.play();
        setTimeout(elevatorCall, 1000);
    }
    setTimeout(doorsOpen, panelFloorNumber * 1000);
}

