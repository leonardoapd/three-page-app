// Show the range of the slider
function showRange(slider, id) {
    let range = document.getElementById(id);
    range.innerHTML = slider.value;
}

var sliderMax = document.getElementById("max");
var sliderMin = document.getElementById("min");



// Enable the submit button if the range is valid
function enableSubmit() {
    let submit = document.getElementById("submit");
    let min = sliderMin.value;
    let max = sliderMax.value;
    // Convert to numbers
    min = Number(min);
    max = Number(max);
    if (min <= max) {
        submit.disabled = false;
        submit.style.backgroundColor = "#6562CF";
    } else {
        submit.disabled = true;
        submit.style.backgroundColor = "gray";
    }
}

sliderMin.oninput = function () {
    showRange(this, "selected-min");
    enableSubmit();
}

sliderMax.oninput = function () {
    showRange(this, "selected-max");
    enableSubmit();
}