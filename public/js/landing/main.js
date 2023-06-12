const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".img-slide");
const contents = document.querySelectorAll(".content");

var currentSlide = 0; // Menyimpan indeks slide saat ini

var slideNav = function (manual) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    contents.forEach((content) => {
        content.classList.remove("active");
    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
};

var nextSlide = function () {
    currentSlide = (currentSlide + 1) % slides.length; // Mengupdate indeks slide saat ini
    slideNav(currentSlide);
};

// Mengatur interval untuk slider otomatis
var slideInterval = setInterval(nextSlide, 3000); // Ganti slide setiap 3000ms (3 detik)

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        slideNav(i); // Memanggil fungsi slideNav dengan indeks sebagai argumen
        clearInterval(slideInterval); // Menghentikan slider otomatis saat tombol navigasi diklik
    });
});
