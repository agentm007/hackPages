<!DOCTYPE html>
<html lang="en">
  <head>
    <title>URL Encoder Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      require '/var/www/html/hack/bootimport.php';
   ?>
    <script>
    function convert(){
      if(document.getElementById("url").checked){
        document.getElementById("output").value = encodeURI(document.getElementById("input").value);
      }
      else if(document.getElementById("component").checked){
        document.getElementById("output").value = encodeURIComponent(document.getElementById("input").value);
      }
      else if(document.getElementById("decodeURL").checked){
        document.getElementById("output").value = decodeURI(document.getElementById("input").value);
      }
      else if(document.getElementById("decodeURLComponent").checked){
        document.getElementById("output").value = decodeURIComponent(document.getElementById("input").value);
      }
    }
    </script>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">URL Encoder Page</h1>
    </div>
    <div class="container">

      <p></p>

    <textarea id="input" rows="4" cols="70"></textarea>
    <br />
    <br />
    <input type="radio" name="url" id="url" checked="checked" />To URL
    <input type="radio" name="url" id="component" />To URL Component
    <input type="radio" name="url" id="decodeURL" />Decode URL
    <input type="radio" name="url" id="decodeURLComponent" />Decode URL Component
    <button type="button" onclick="convert()">Convert</button><br /><br />
    <textarea id="output" rows="4" cols="70"></textarea>

    </div>
  </body>
</html>
