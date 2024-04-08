const shared = document.getElementById("shared");
const vps = document.getElementById("vps");
const vds = document.getElementById("vds");
const tarifblock = document.getElementById("tarif");

shared.addEventListener("click", (e) => {
    tarifblock.scrollIntoView()
});
vps.addEventListener("click", (e) => {
    tarifblock.scrollIntoView()
});
vds.addEventListener("click", (e) => {
    tarifblock.scrollIntoView()
});