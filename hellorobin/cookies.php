<!DOCTYPE html>
<?php include('connection.php') ?>
<html>
  <head>
    <title>Hello Robin</title> 
    <link href="css/cookiesstyle.css" type="text/css" rel="stylesheet">
    <link href="css/mainstyle.css" type="text/css" rel="stylesheet">
  </head>
  
  <body>
    <div id="page-container">
      <div id="content-wrap">
        <?php require "header.php"?>
        <div class="container">
          <h1>Cookies</h1>
          <p>Our cookies are baked fresh as needed. We always have our classic flavors available for walk-in customers. However, for vegan or orders of more than two dozen, we appreciate advance notice. </p>
        </div>
        <div id="seasonal">
      Seasonal
        </div>
        <div class="stretchcontainer">
          <div id="promoinfo">            
            <div id="promoname">
            The Magically Delicious
            </div>
            <div id="promodesc">
              Includes milk chocolate and marshmallows from a certain delicious breakfast cereal.
            </div>
          </div>
          <span id="promodot"></span>
          <img src="https://storage.googleapis.com/hello_robin_resources/cookies/testCookie.png" class="cookieimg" id="promoimg">

        </div>
                
          <div id="cookietable">
        <?php
  
        $cookies = array();
        $cookieCount = 0;
      
        $query = "SELECT * FROM cookies";
        $response = mysqli_query($con, $query) or die("Bad Query:SQL");
        while ($row = mysqli_fetch_array($response, MYSQLI_ASSOC)) {

          $cookieName = $row['cookieName'];
          $cookieDescription = $row['cookieDescription'];

          $cookie = array($cookieName, $cookieDescription);

          array_push($cookies, $cookie);
          $cookieCount++;
        }
            $cookiesJSON = json_encode($cookies); 
            mysqli_close($con);
          ?>
          
    <script>
    var cookies = <?php echo $cookiesJSON ?>;
    var cookieCount = "<?php echo $cookieCount ?>";

    window.onload = function showMembers() {
      var html = [];

      for (var i = 0; i < cookieCount; i++) {

        html.push('<div class="cookiechunk"><div class="cookiename">');
        html.push(cookies[i][0]);
        html.push('</div>');
        
        html.push('<img src="https://storage.googleapis.com/hello_robin_resources/cookies/testCookie.png" class="cookieimg">');
        
        html.push('<div class="cookiedesc">');
        html.push(cookies[i][1]);
        html.push('</div></div>');
      }
      document.getElementById("cookietable").innerHTML = html.join("");
      };
      </script>  

          </div>
        
        <div class="stretchcontainer">
          
          <span id="promodot"></span>
          <img src="https://storage.googleapis.com/hello_robin_resources/cookies/testCookie.png" class="cookieimg" id="promoimg">
          
          <div id="promoinforight">            
            <div id="promoname">
            Cookie Cakes
            </div>
            <div id="promodesc">
              We also make customized 9" or 12" Cookie Cakes ($35 and $45). Call to Order.
            </div>
          </div>
        </div>
      </div>
      <?php include "footer.php"?>
    </div>
  </body>
</html>