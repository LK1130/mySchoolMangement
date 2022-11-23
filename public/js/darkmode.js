const html = document.querySelector("html");
const darkMode = stringToBoolean(localStorage.getItem("darkMode"));

    darkMode ? html.classList.add("dark") : html.classList.remove("dark");
function stringToBoolean(value) {
    return String(value) === "1" || String(value).toLowerCase() === "true";
}
