// JS function untuk update waktu
function updateDateTime() {
    const now = new Date();

    const days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
    ];
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    const day = days[now.getDay()];
    const date = now.getDate();
    const month = months[now.getMonth()];
    const year = now.getFullYear();
    const hour = now.getHours() % 12 || 12;
    const minute = now.getMinutes();
    const ampm = now.getHours() < 12 ? "AM" : "PM";

    document.querySelector(".day").textContent = day;
    document.querySelector(".date-number").textContent = date;
    document.querySelector(".month").textContent = month;
    document.querySelector(".year").textContent = year;
    document.querySelector(".hour").textContent = hour;
    document.querySelector(".minute").textContent = ("0" + minute).slice(-2);
    document.querySelector(".ampm").textContent = ampm;
}

// Update time every second
setInterval(updateDateTime, 1000);

// Initial update
updateDateTime();
