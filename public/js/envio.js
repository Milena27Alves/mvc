function showHint(str) {
    if (str.length == 0) {
        document.getElementById("resultado").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("resultado").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "consulta", true);
        xmlhttp.send();
    }
}
