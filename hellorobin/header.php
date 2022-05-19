<!DOCTYPE html>
<html>
  <head>    
    <link rel="stylesheet" href="css/headerstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <title>Hello Robin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <header>
    <div id="headerdiv">
      <div id="headercontainer">
      <a href="index.php"><img id="helloRobinLogo" src="https://storage.googleapis.com/hello_robin_resources/helloRobinLogo.png"></a>
      <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>
      <div id="navdivs">
        <a href="index.php"><div class="navdiv">Home</div></a>
        <a href="cookies.php"><div class="navdiv">Cookies</div></a>
        <a href="about.php"><div class="navdiv">About</div></a>
        <a href="order.php"><div class="navdiv">Order</div></a>
        <a href="contact.php"><div class="navdiv">Contact</div></a>
      </div>
    </div>
    </div>
  </header>
    
  <script>
    onResize();
    
    // resize if window is resized
    window.addEventListener("resize", onResize);
    
    // if window is small enough, do small header
    function onResize() {
      if (document.documentElement.clientWidth < 685) {
        smallHeader();
      }
      else if (window.scrollY == 0) {
        largeHeader();
      }
    }
     
    
  // When the user scrolls down 50px from the top of the document, resize the header's font size
  window.onscroll = function() {scrollFunction()};
    
  function scrollFunction() {
    if (window.innerWidth > 685) {
      if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        smallHeader();
      }
      else {
        largeHeader();
      }
    }
  }
    
  function smallHeader() {
    document.getElementById("helloRobinLogo").style.height = "50px";
    document.getElementById("navdivs").style.padding= "0px 0px 0px 0px";
    document.getElementById("page-container").style.marginTop= "70px";
    document.getElementById("headerdiv").style.boxShadow = "0 0 1px 0.1px grey";
  }

  function largeHeader() {
    document.getElementById("helloRobinLogo").style.height = "90px";
    document.getElementById("navdivs").style.padding= "20px 0px 25px 0px";
    document.getElementById("page-container").style.marginTop= "120px";
    document.getElementById("headerdiv").style.boxShadow = "none";
  }
  
  </script>
    
  </body>
</html>

  