var slideIndex = 0;
showSlides(slideIndex);
showSlidesRec();
// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlidesGallery");
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

function showSlidesRec()
{
    //console.log("test");
    var i;
    var slides = document.getElementsByClassName("mySlidesGallery");
    for (i = 0; i < slides.length; i++)
    {
	slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
	slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlidesRec, 4000);
}
