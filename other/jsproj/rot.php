<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rotation Encoder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      require '/var/www/html/hack/bootimport.php';
    ?>

    <script>
    function ROT(value, shift){
      length = value.length;
      shift = shift%26;
      output = "";

      for(i=0; i<length; i++){
        letter = value.charCodeAt(i);
        if((letter >= 65) && (letter <= 90)){
          letter += shift;
          if(letter > 90){
            letter -= 26;
          }
          output += String.fromCharCode(letter);
        }

        else if((letter >= 97) && (letter <= 122)){
          letter += shift;
          if(letter > 122){
            letter -= 26;
          }
          output += String.fromCharCode(letter);
        }

        else{
          output += value.charAt(i);
        }
      }
      return output;
    }

  function convert(){
    document.getElementById("output").value = ROT(document.getElementById("input").value, document.getElementById("amount").value);
  }

    function bruteForce(){
      inputString = document.getElementById("input").value;
      document.getElementById("output").value = "";
      for(j=0; j<26; j++){
        document.getElementById("output").value += ROT(inputString, j);
        document.getElementById("output").value += "\n\n"
      }
    }
    </script>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Rotation Encoder</h1>
    </div>
    <div class="container">
    <h2></h2>
    <textarea id="input" rows="4" cols="70"></textarea>
    <br />
    <br />

    <input type="number" id="amount" value="13">
    <button type="button" onclick="convert()">Convert</button>
    <button type="button" onclick="bruteForce()">Brute Force </button><br /><br />

    <textarea id="output" rows="4" cols="70"></textarea>

    </div>
  </body>
</html>
