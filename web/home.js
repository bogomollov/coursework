const viewtarifs = document.getElementById("view-tarifs");

const shared = document.getElementById("shared");
const vps = document.getElementById("vps");
const vds = document.getElementById("vds");

const dedicated = document.getElementById("dedicated");
const cloud = document.getElementById("cloud");
const web = document.getElementById("web");

const register = document.getElementById("register");

const tarifblock = document.getElementById("tarif");
const tarifblock2 = document.getElementById("tarif2");

var arr = [viewtarifs, shared, vps, vds, web, cloud];
arr.forEach(element => {
    element.addEventListener("click", (e) => {
        tarifblock.scrollIntoView()
    })
});

dedicated.addEventListener("click", (e) => {
    tarifblock2.scrollIntoView()
});

register.addEventListener("click", (e) => {
    window.location.href="popup.php";
});