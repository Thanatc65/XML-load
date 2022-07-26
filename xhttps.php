function load() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("ID").innerHTML = xhttp.responseText;
}
};
xhttp.open("GET", "FILENAME", true);
xhttp.send();
}
setInterval(function() {

load();

}, 1000)
window.onload = load();