<!DOCTYPE html>
<html>
  <head>
    <title>Hello Robin</title> 
    <link href="css/indexstyle.css" type="text/css" rel="stylesheet">
    <link href="css/mainstyle.css" type="text/css" rel="stylesheet">
  </head>
  
  <body>
    <div id="page-container">
      <div id="content-wrap">
        <?php require "header.php"?>
        
        <div class="container">
          <h1>Locations</h1>
          <div class="locationchunk" style="transform: rotate(1deg)">
            <p class="locationheader">Capitol Hill</p>
            <img class="storepic" src="https://storage.googleapis.com/hello_robin_resources/capitolHill.jpg">
            <div class="locationinfo">
            <p class="address">522 19th Ave. E<br>Seattle, WA 98112</p>
            (206) 735-7970</div>
          </div>

          <div class="locationchunk" style="transform: rotate(-1deg)">
            <p class="locationheader">U Village</p>
            <img class="storepic" src="https://storage.googleapis.com/hello_robin_resources/uVillage.jpg">
            <div class="locationinfo"><p class="address">New Address Here<br>Seattle, WA 98112</p>New Phone Here</div>
          </div>
        </div>
        
        <div class="container">
        <h1>Hours</h1>
        <div class="alert">Due to the governor's call to close all non-essential businesses, we have closed our doors temporarily. We hope to be back in action soon. Stay healthy!</div>
        
    
        Closed: 4th of July, Thanksgiving, Christmas Eve past 3pm, Christmas Day
      
        </div>
      </div>
      <?php include "footer.php"?>
    </div>
  </body>
</html>