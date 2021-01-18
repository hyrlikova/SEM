function showTime() {
    var datum = new Date();
    var h = datum.getHours();
    var m = datum.getMinutes();
    var s = datum.getSeconds();

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var cas = h + ":" + m + ":" + s + " ";
    document.getElementById("cas").innerText = cas;
    document.getElementById("cas").textContent = cas;

    setTimeout(showTime, 1000);
}


function burgerMenuBar() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

