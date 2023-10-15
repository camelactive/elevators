let callButtonDoor = document.querySelector("elevator-control-panel-button"),
    leftDoor = document.querySelector(".elevator-left-door"),
    rightDoor = document.querySelector(".elevator-right-door");
let doorsSound = new Audio("assets/sounds/soundscrate-elevator-door-open-1.mp3");

function doorsOpen(){
    leftDoor.style.transition = "width 3s";
    rightDoor.style.transition = "width 3s";
    leftDoor.style.width = "5%";
    rightDoor.style.width = "5%";
    doorsSound.play();
    setTimeout(doorsClose,8000);
}
function doorsClose(){
    leftDoor.style.transition = "width 3s";
    rightDoor.style.transition = "width 3s";
    leftDoor.style.width = "50%";
    rightDoor.style.width = "50%";
    doorsSound.play();
}