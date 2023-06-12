// Menampilkan loading image saat halaman sedang dimuat
window.addEventListener("load", function () {
    // Menampilkan loader
    document.querySelector(".loader_bg").style.display = "flex";

    // Menyembunyikan loader setelah 3 detik
    setTimeout(function () {
        document.querySelector(".loader_bg").style.display = "none";
    }, 3000);
});
