<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reverse String</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      require '/var/www/html/hack/bootimport.php';
   ?>
    <script>
      function reverseString(inputString){
        length = --inputString.length;
        returnValue = "";
        for(i = length; i >= 0 ; i--){
          returnValue += inputString[i];
        }
        return returnValue;
      }

      function convert(){
        document.getElementById("output").value = reverseString(document.getElementById('input').value);
      }
    </script>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Reverse String</h1>
    </div>
    <div class="container">

      <p></p>

    <textarea id="input" rows="4" cols="70"></textarea>
    <br />
    <br />
    <button type="button" onclick="convert()">Reverse</button><br /><br />
    <textarea id="output" rows="4" cols="70"></textarea>

    </div>
  </body>
</html>
