document.getElementById("test").innerHTML = "1234";

function findNote() {
    if(document.getElementById("searchName").innerHTML != ""){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("results").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "./findNote.php", true);
        xhttp.send();
    }
}

function createNote() {
    if(document.getElementById("createName").innerHTML != "" && document.getElementById("createMessage").innerHTML != ""){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("results").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "./createNote.php", true);
    xhttp.send();
  }
}

