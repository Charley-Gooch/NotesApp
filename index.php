<html>
  <head>  
    <link rel="stylesheet" href="./index.css">
    <script type="text/javascript" src="./index.js"></script>
  </head>
  <body>
  <div id="selection">
      <br>
      <input type="button" id="searchButton" name="search" value="Search for an existing note by name">
      <input type="text" id="searchName" name="input" placeholder="E.g SchoolPlay">
      <br>
      <br>
      <input type="button" id="createButton" name="search" value="Or create a new Note">
      <input type="text" id="createName" name="name" placeholder="New Note Name"> 
      <input type="text" id="createMessage" name="message" placeholder="Message">
      <br>
      <br>
  </div>
  <div id="result">

  </div>
  <script type="text/javascript">
  window.onload = function(){
    document.getElementById("result").innerHTML = "Results will be shown here";
  }
  </script>
  </body>
</html>