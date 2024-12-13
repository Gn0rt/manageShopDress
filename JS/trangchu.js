
imgSlider();
function imgSlider() {
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img");
    const imgContain = document.querySelector(".aspect-ratio-169");
    const dotItem = document.querySelectorAll(".dot");
    let index = 0;
    let imgNumber = imgPosition.length;

    imgPosition.forEach(function (img, index) {
        img.style.left = index * 100 + "%";
        dotItem[index].addEventListener("click", function () {
            slider(index);
        });
    });

    function imgSlide() {
        index++;
        console.log(index);
        if (index >= imgNumber) { index = 0; }
        slider(index);
    }
    function slider(index) {
        imgContain.style.left = "-" + index * 100 + "%";
        const dotActive = document.querySelector(".active");
        dotActive.classList.remove("active");
        dotItem[index].classList.add("active");
    }

    setInterval(imgSlide, 5000);
}




var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}





