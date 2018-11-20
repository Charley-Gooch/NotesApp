document.getElementById("result").innerHTML = "Results will be shown here";

function findNote() {
    if(document.getElementById("searchName").value != ""){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                document.getElementById("result").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "./findNote.php", true);
        xhttp.send();
    }
}

function createNote() {
    if(document.getElementById("createName").value != "" && document.getElementById("createMessage").value != "" ){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            alert("state change");
            if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                alert(xhttp.responseText);
                document.getElementById("result").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "./createNote.php", true);
        alert("request create");
        xhttp.send();
        alert("request sent");
    }
}