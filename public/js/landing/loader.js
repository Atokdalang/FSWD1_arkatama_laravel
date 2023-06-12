// Menampilkan loader
function showLoader() {
    document.querySelector(".loader_bg").style.display = "block";
}

// Menyembunyikan loader
function hideLoader() {
    document.querySelector(".loader_bg").style.display = "none";
}

// Contoh penggunaan loader sebelum dan setelah operasi yang membutuhkan waktu lama
showLoader();

// Operasi yang membutuhkan waktu lama
setTimeout(function () {
    // Setelah operasi selesai, sembunyikan loader
    hideLoader();
}, 3000);

setTimeout(function () {
    var successMessage = document.querySelector(".alert-success");
    if (successMessage) {
        successMessage.style.display = "none"; // Sembunyikan pesan sukses setelah beberapa detik
    }
}, 6000); // Ubah 5000 dengan jumlah milidetik yang diinginkan
