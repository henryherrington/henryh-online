<!DOCTYPE html>
<html>
  <head>
    <title>Hello Robin</title> 
    <link href="css/contactstyle.css" type="text/css" rel="stylesheet">
    <link href="css/mainstyle.css" type="text/css" rel="stylesheet">
  </head>
  
  <body>
    <div id="page-container">
      <div id="content-wrap">
        <?php require "header.php"?>
        <div class="container">
          <h1>Contact Us</h1>
          <table>
            <tr>
              <td class="typecol">
                Phone:
              </td>
              <td>
                (206) 735-7970
              </td>
            </tr>
            <tr>
              <td class="typecol">
                Email:
              </td>
              <td>
                hellorobincookies@gmail.com
              </td>
            </tr>
            <tr>
              <td class="typecol">
                Capitol Hill Address:
              </td>
              <td>
                522 19th Ave. E
          Seattle, WA 98112
              </td>
            </tr>
          </table>
          </div>
          <div id="contactform">
            <form action="sendmail.php" method="post">
            Name:<br>
            <input type="text" name="name"><br>
            E-mail:<br>
            <input type="text" name="email"><br>
            Subject:<br>
            <input type="text" name="subject"><br>
            Comment:<br>
            <textarea type="text" name="message" row="100" cols="38" maxlength="1500"></textarea><br>
            <input type="submit" name="submit" value="Send ">
            </form>
          </div>
        </div>
      <?php include "footer.php"?>
    </div>
  </body>
</html>