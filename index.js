// Anonymous "self-invoking" function
(function() {
    var startingTime = new Date().getTime();
    // Load the script
    var script = document.createElement("SCRIPT");
    script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(script);

    // Poll for jQuery to come into existance
    var checkReady = function(callback) {
        if (window.jQuery) {
            callback(jQuery);
        }
        else {
            window.setTimeout(function() { checkReady(callback); }, 20);
        }
    };

    checkReady(function($){
        $("#searchButton").click(function(){
            //Post the form data serialized for the proper formatting
            $.post("./findNote.php", {input: document.getElementById("searchName").value}
            //Get the response from process.php
            , function(response){
                    //Set results div to response content
                    document.getElementById("result").innerHTML = response;
            });
        })
    });

    checkReady(function($){
        $("#createButton").click(function(){
            //Post the form data serialized for the proper formatting
            $.post( "./createNote.php", { name: document.getElementById("createName").value, message: document.getElementById("createMessage").value}
            , function(response){
                //Set results div to response content
                document.getElementById("result").innerHTML = response;
            });
        })
    });
})();