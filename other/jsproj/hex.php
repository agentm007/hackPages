<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hexadecimal decoder/encoder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      require '/var/www/html/hack/bootimport.php';
    ?>
    <script>
    function hexToASCII(value){
      var out = '';
      value = value.toString();
      for(i=0; i < value.length; i+=2){
        out += String.fromCharCode(parseInt(value.substr(i,2),16));
      }
      return out;
    }

    function ASCIITohex(value){
      var out = '';
      for(i=0; i < value.length; i++){
        out += Number(value.charCodeAt(i)).toString(16);
      }
      return out;
    }

    function hexToBin(value){
      length = value.length;
      ans = '';
      for(i=0; i<length; i++){
        ans += parseInt(value[i], 16).toString(2).padStart(4,'0');
      }
      return ans;
    }

    function binToHex(value){
      length = value.length;
      ans = '';
      if(length%4 == 0){
        for(i=0; i<length; i+=4){
          ans += parseInt(value.substring(i,i+4),2).toString(16).padStart(1,0);
        }
      }
      else{
        ans = "Incorrect length for a hex string";
      }
      return ans;
    }

    function convert(){
      if(document.getElementById("hex").checked){
       document.getElementById("output").value = ASCIITohex(document.getElementById("input").value);
      }
      else if(document.getElementById("ascii").checked){
        document.getElementById("output").value = hexToASCII(document.getElementById("input").value);
      }
      else if(document.getElementById("binary").checked){
        document.getElementById("output").value = hexToBin(document.getElementById("input").value);
      }
      else if(document.getElementById("binToHex").checked){
        document.getElementById("output").value = binToHex(document.getElementById("input").value);
      }
    }
    </script>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Hexadecimal decoder/encoder</h1>
    </div>
    <div class="container">
    <textarea id="input" rows="4" cols="70"></textarea>
    <br />
    <br />
    <input type="radio" name="hex" id="hex" checked="checked" />ASCII To Hex
    <input type="radio" name="hex" id="ascii" />To ASCII
    <input type="radio" name="hex" id="binary" />To Binary
    <input type="radio" name="hex" id="binToHex" />Binary To Hex
    <button type="button" onclick="convert()">Convert</button><br /><br />
    <textarea id="output" rows="4" cols="70"></textarea>

    </div>
  </body>
</html>
