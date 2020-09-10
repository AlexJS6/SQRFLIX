document.getElementById("mySearchButton").addEventListener("click", () => {
    document.getElementsByClassName("hidden_navbar")[0].style.visibility = "visible";
    setTimeout(() => {
        document.getElementsByClassName("hidden_navbar")[0].style.visibility = "hidden";
    }, 10000);
})
