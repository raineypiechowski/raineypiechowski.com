window.addEventListener("load", function() {
    var menuToggle = document.getElementById("menu-toggle");
    var menu = document.getElementById("menu");

    menuToggle.addEventListener("click", openMenu);
    menu.addEventListener("click", closeMenu);

    function openMenu() {
        menu.style.display = "block";
        menuToggle.removeEventListener("click", openMenu);
        menuToggle.addEventListener("click", closeMenu);
    }

    function closeMenu() {
        menu.style.display = "none";
        menuToggle.removeEventListener("click", closeMenu);
        menuToggle.addEventListener("click", openMenu);
    }

    window.addEventListener("resize", function() {
        if (window.innerWidth <= 400) {
            menu.style.display = "none";
        } else {
            menu.style.cssText = "display: -webkit-flex; display: flex;";
        }
    });

    var slideContainer = document.getElementById("slide-container");
    var carousellBtnContainer = document.getElementById("carousell-btn-container");

    var slides = [
        {
            src: "slide-1.jpg",
            alt: "Person on bolder 1"
        },
        {
            src: "slide-2.jpg",
            alt: "Snowy Mountains 2"
        },
        {
            src: "slide-1.jpg",
            alt: "Person on bolder 3"
        },
        {
            src: "slide-2.jpg",
            alt: "Snowy Mountains 4"
        }
    ];

    window.addEventListener("resize", createCarousell);

    function createCarousell() {
        if (window.innerWidth <= 450) {
            var slideCount = 1;
        } else if (window.innerWidth <= 660) {
            var slideCount = 2;
        } else if (window.innerWidth <= 870) {
            var slideCount = 3;
        } else {
            var slideCount = 4;
        }

        slideContainer.innerHTML = "";
        for (var i = 0; i < slideCount; i++) {
            var img = document.createElement("img");
            img.src = "static/img/" + slides[i].src;
            img.alt = slides[i].alt;
            slideContainer.appendChild(img);
        }

        carousellBtnContainer.innerHTML = "";
        for (var i = 0; i < slides.length - 1; i++) {
            var button = document.createElement("button");
            button.setAttribute("data-btn-number", i + 1);
            carousellBtnContainer.appendChild(button);
        }

        var carousellBtns = carousellBtnContainer.querySelectorAll("button");
        var currentIndex = 0;
        carousellBtns.forEach(btn => {
            btn.addEventListener("click", function() {
                currentIndex = parseInt(this.getAttribute("data-btn-number"));
                slideContainer.innerHTML = "";
                for (var i = 0; i < slideCount; i++) {
                    currentIndex++;
                    if (currentIndex == slides.length) {
                        currentIndex = 0;
                    }
                    
                    var img = document.createElement("img");
                    img.src = "static/img/" + slides[currentIndex].src;
                    img.alt = slides[currentIndex].alt;
                    slideContainer.appendChild(img);
                }
            });
        });
    }

    createCarousell();
});