<!DOCTYPE html>
<html lang="en">
  <head>
    <title>To Binary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      require '/var/www/html/hack/bootimport.php';
   ?>
    <script>
      function toBinary(inputString){
        length = inputString.length;
        returnValue = "";
        for(i = 0; i < length; i++){
          returnValue += inputString.charCodeAt(i).toString(2).padStart(8,'0') + " ";
        }
        return returnValue;
      }

      function toASCII7bit(inputString){
        if(!inputString.match('[01 ]'))
          throw "Incorrect Characters Encountered.";

        inputString = inputString.replace(/\s+/g, '');
        length = inputString.length;
        returnString = ""

        if((length%7) != 0)
          throw "Invalid String Length";

        for( i = 0; i < length; i += 7){
          returnString += String.fromCharCode(parseInt(inputString.substr(i,7), 2));
        }

        return returnString;
      }

      function toASCII8bit(inputString){
        if(!inputString.match('[01 ]'))
          throw "Incorrect Characters Encountered.";

        inputString = inputString.replace(/\s+/g, '');
        length = inputString.length;
        returnString = ""

        if((length%8) != 0)
          throw "Invalid String Length";

        for( i=0; i < length; i += 8){
          returnString += String.fromCharCode(parseInt(inputString.substr(i,8), 2));
        }
        return returnString
      }

      function convert(){
        if(document.getElementById("toBinary").checked){
          document.getElementById("output").value = toBinary(document.getElementById('input').value);
        }
        else if(document.getElementById("ascii7").checked){
          document.getElementById("output").value = toASCII7bit(document.getElementById('input').value);
        }
        else if(document.getElementById("ascii8").checked){
          document.getElementById("output").value = toASCII8bit(document.getElementById('input').value);
        }
      }
    </script>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">To Binary</h1>
    </div>
    <div class="container">

      <p></p>

    <textarea id="input" rows="4" cols="70"></textarea>
    <br />
    <br />
    <input type="radio" name="binary" id="toBinary" checked="checked" />To Binary
    <input type="radio" name="binary" id="ascii7" />To ASCII 7 bit
    <input type="radio" name="binary" id="ascii8" />To ASCII 8 bit
    <button type="button" onclick="convert()">Convert</button><br /><br />
    <textarea id="output" rows="4" cols="70"></textarea>

    </div>
  </body>
</html>
