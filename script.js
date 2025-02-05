document.addEventListener("DOMContentLoaded", function () {
    function activateSlide(carouselId, direction) {
        var carousel = document.querySelector(carouselId);
        if (!carousel) return;

        if(carouselId=='#carouselFrontProtexiones'){
            var activeItem = carousel.querySelector(".carousel-item2.active");
            var items = carousel.querySelectorAll(".carousel-item2");
        }else if(carouselId=='#carouselBackProtexiones'){
            var activeItem = carousel.querySelector(".carousel-item3.active");
            var items = carousel.querySelectorAll(".carousel-item3");
        }else{
            return;
        }
        var activeIndex = Array.from(items).indexOf(activeItem);
        var newIndex;

        if (direction === "next") {
            newIndex = (activeIndex + 1) % items.length; // Siguiente slide
        } else {
            newIndex = (activeIndex - 1 + items.length) % items.length; // Slide anterior
        }
        activeItem.classList.remove("active");
        items[newIndex].classList.add("active");
    }

    // Asignar eventos a los botones de cada carousel interno
    document.querySelectorAll(".carousel").forEach(carousel => {
        var carouselId = "#" + carousel.id;

        var nextBtn = carousel.querySelector(".carousel-control-next");
        var prevBtn = carousel.querySelector(".carousel-control-prev");

        if (nextBtn) {
            nextBtn.addEventListener("click", function () {
                activateSlide(carouselId, "next");
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener("click", function () {
                activateSlide(carouselId, "prev");
            });
        }
    });
});