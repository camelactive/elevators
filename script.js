let buildingsNumberSelect = document.querySelector(".buildings-select-js");
let mainBlock = document.querySelector(".main-block-js");
buildingsNumberSelect.addEventListener("change", elevatorBuild);
elevatorBuild();
randomFloor();
function numberChange(e) {
    elevatorBuild();
}
function randomFloor() {
    let elevatorInfoPanels = document.querySelectorAll(".elevator-info-panel-floor");
    elevatorInfoPanels.forEach((elevatorInfoPanel) => {
        const randomNumber = Math.floor(Math.random() * 14) + 1;
        elevatorInfoPanel.innerHTML = randomNumber;
    });
}
function elevatorBuild() {
    mainBlock.innerHTML = "";
    let selectedBuildingsNumber = buildingsNumberSelect.value;
    if(selectedBuildingsNumber <= 4){
        for (let i = 0; i < selectedBuildingsNumber; i++) {
            let elevatorPicture =
                `<div class="elevator">
                    <div class="elevator-main-block">
                        <div class="elevator-info-panel">
                            <div class="elevator-info-panel-floor">01</div>
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
                        <div class="elevator-control-panel-button"></div>
                    </div>
                </div>`;

            mainBlock.insertAdjacentHTML("beforeend", elevatorPicture);
        }
        randomFloor();
    }else if(selectedBuildingsNumber > 4){
        let areYouOnMind = "<div class=\"are-you-not-good\">Написано же выбрать от " +
            "<p class=\"neon\">1</p>" +
            "<p>до</p>" +
            "<p class=\"neon\">4</p>" +
        "</div>"
        mainBlock.insertAdjacentHTML("beforeend", areYouOnMind);
    }


}
