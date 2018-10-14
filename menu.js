var slideIndexAlcove = 0;
var slideIndexGrange = 0;
var slideIndexForge = 0;
showSlidesAlcoves();
showSlidesGranges();
showSlidesForges();

function showSlidesAlcoves() {
    var i;
    var slides = document.getElementsByClassName("mySlidesAlcoves");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndexAlcove++;
    if (slideIndexAlcove > slides.length) {
        slideIndexAlcove = 1}
    slides[slideIndexAlcove - 1].style.display = "block";
    setTimeout(showSlidesAlcoves, 4000); // Change image every 4 seconds
}

function showSlidesGranges() {
    var i;
    var slides = document.getElementsByClassName("mySlidesGranges");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndexGrange++;
    if (slideIndexGrange > slides.length) {
        slideIndexGrange = 1}
    slides[slideIndexGrange - 1].style.display = "block";
    setTimeout(showSlidesGranges, 4000); // Change image every 4 seconds
}

function showSlidesForges() {
    var i;
    var slides = document.getElementsByClassName("mySlidesForges");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndexForge++;
    if (slideIndexForge > slides.length) {
        slideIndexForge = 1}
    slides[slideIndexForge - 1].style.display = "block";
    setTimeout(showSlidesForges, 4000); // Change image every 4 seconds
}
