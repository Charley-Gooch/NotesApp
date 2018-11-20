<html>
  <head>  
    <link rel="stylesheet" href="./index.css">
    <script type="text/javascript" src="./index.js"></script>
  </head>
  <body>
    <div id="test">
      <br>
      <input type="button" name="search" onclick="findNote();" value="Search for an existing note by name">
      <input type="text" id="searchName" name="input" placeholder="E.g SchoolPlay" required>
      <br>
      <br>
      <input type="button" name="search" onclick="createNote();" value="Or create a new Note">
      <input type="text" id="createName" name="name" placeholder="New Note Name" required> 
      <input type="text" id="createMessage" name="message" placeholder="Message" required>
      <br>
      <br>
    </div>
  </body>
</html>