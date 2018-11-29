var slideIndex = 1;
showSlides(slideIndex);
//showSlidesRec();

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("message");
    if (n > slides.length)
    {
        slideIndex = 1;
    }
    if (n < 1)
    {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}

/*function showSlidesRec() {
    var i;
    var slides = document.getElementsByClassName("message");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1}
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlidesRec, 8000); // Change image every 4 seconds
}*/