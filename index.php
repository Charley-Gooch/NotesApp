<html>
  <head>  
    <link rel="stylesheet" href="./index.css">
  </head>
  <body>
  <div id="selection">
      <br>
      <input type="button" name="search" onclick="findNote();" value="Search for an existing note by name">
      <input type="text" id="searchName" name="input" placeholder="E.g SchoolPlay">
      <br>
      <br>
      <input type="button" name="search" onclick="createNote();" value="Or create a new Note">
      <input type="text" id="createName" name="name" placeholder="New Note Name"> 
      <input type="text" id="createMessage" name="message" placeholder="Message">
      <br>
      <br>
  </div>
  <div id="result">

  </div>
  <script type="text/javascript" src="./index.js"></script>
  </body>
</html>